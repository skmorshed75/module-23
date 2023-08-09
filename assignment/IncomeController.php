<?php
public function getTotalIncome()
{
    $user = Auth::user();
    $totalIncome = $user->incomes()->sum('amount');

    return $totalIncome;
}


public function index(Request $request)
{
    $user = Auth::user();
    $query = $user->incomes(); // Use incomes() or expenses() based on the controller

    if ($request->has('category')) {
        $query->where('category', $request->input('category'));
    }

    if ($request->has('start_date') && $request->has('end_date')) {
        $query->whereBetween('date', [$request->input('start_date'), $request->input('end_date')]);
    }

    $incomes = $query->paginate(10); // Adjust per your needs

    return view('incomes.index', compact('incomes'));
}


public function edit(Income $income)
{
    return view('incomes.edit', compact('income'));
}

public function update(Request $request, Income $income)
{
    $request->validate([
        'amount' => 'required|numeric',
        'description' => 'required|string|max:255',
        'date' => 'required|date',
        'category' => 'required|string|max:255',
    ]);

    $income->update([
        'amount' => $request->input('amount'),
        'description' => $request->input('description'),
        'date' => $request->input('date'),
        'category' => $request->input('category'),
    ]);

    return redirect()->route('incomes.index')->with('success', 'Income updated successfully.');
}


public function destroy(Income $income)
{
    $income->delete();

    return redirect()->route('incomes.index')->with('success', 'Income deleted successfully.');
}

// do same in expense Controller
