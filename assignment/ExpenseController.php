<?php
public function getTotalExpense()
{
    $user = Auth::user();
    $totalExpense = $user->expenses()->sum('amount');

    return $totalExpense;
}
