<?php
public function getTotalExpense()
{
    $user = Auth::user();
    $totalExpense = $user->expenses()->sum('amount');

    return $totalExpense;
}


public function index(Request $request)
{
    $user = Auth::user();
    $query = $user->expenses(); // Use expenses() or expenses() based on the controller

    if ($request->has('category')) {
        $query->where('category', $request->input('category'));
    }

    if ($request->has('start_date') && $request->has('end_date')) {
        $query->whereBetween('date', [$request->input('start_date'), $request->input('end_date')]);
    }

    $expenses = $query->paginate(10); // Adjust per your needs

    return view('expenses.index', compact('expenses'));
}


public function edit(Ixpense $expense)
{
    return view('expenses.edit', compact('expense'));
}

public function update(Request $request, Expense $expense)
{
    $request->validate([
        'amount' => 'required|numeric',
        'description' => 'required|string|max:255',
        'date' => 'required|date',
        'category' => 'required|string|max:255',
    ]);

    $expense->update([
        'amount' => $request->input('amount'),
        'description' => $request->input('description'),
        'date' => $request->input('date'),
        'category' => $request->input('category'),
    ]);

    return redirect()->route('expenses.index')->with('success', 'Expense updated successfully.');
}
