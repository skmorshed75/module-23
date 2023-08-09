<?php


Route::middleware(['auth'])->group(function () {
    // Your income and expense routes go here
});

Route::middleware(['auth'])->group(function () {
    // ... other routes
    
    Route::get('/incomes/create', 'IncomeController@create')->name('incomes.create');
    Route::post('/incomes', 'IncomeController@store')->name('incomes.store');
    
    Route::get('/expenses/create', 'ExpenseController@create')->name('expenses.create');
    Route::post('/expenses', 'ExpenseController@store')->name('expenses.store');
    
    Route::get('/incomes', 'IncomeController@indexIncomes')->name('incomes.index');
    Route::get('/expenses', 'ExpenseController@indexExpenses')->name('expenses.index');
    
});
