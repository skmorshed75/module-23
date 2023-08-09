<?php
public function getTotalIncome()
{
    $user = Auth::user();
    $totalIncome = $user->incomes()->sum('amount');

    return $totalIncome;
}


