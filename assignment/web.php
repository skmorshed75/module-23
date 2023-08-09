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
    
    Route::get('/incomes/{income}/edit', 'IncomeController@edit')->name('incomes.edit');
    Route::patch('/incomes/{income}', 'IncomeController@update')->name('incomes.update');
    
    Route::get('/expenses/{expense}/edit', 'ExpenseController@edit')->name('expenses.edit');
    Route::patch('/expenses/{expense}', 'ExpenseController@update')->name('expenses.update');

    Route::delete('/incomes/{income}', 'IncomeController@destroy')->name('incomes.destroy');
    Route::delete('/expenses/{expense}', 'ExpenseController@destroy')->name('expenses.destroy');

    
});


