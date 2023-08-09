<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Income; // Import the Income model
use App\Expense; // Import the Expense model


public function storeIncome(Request $request)
{
    $request->validate([
        'amount' => 'required|numeric',
        'description' => 'required|string|max:255',
        'date' => 'required|date',
        'category' => 'required|string|max:255',
    ]);

    $user = Auth::user();

    $income = new Income([
        'amount' => $request->input('amount'),
        'description' => $request->input('description'),
        'date' => $request->input('date'),
        'category' => $request->input('category'),
    ]);

    $user->incomes()->save($income);

    return redirect()->route('incomes.index')->with('success', 'Income added successfully.');
}

// Similar method for expenses


public function indexIncomes()
{
    $user = Auth::user();
    $incomes = $user->incomes()->paginate(10); // 10 records per page

    return view('incomes.index', compact('incomes'));
}

// Similar method for expenses

