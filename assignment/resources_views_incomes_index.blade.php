<div class="container">
    <h1>Income Records</h1>
    <!-- ... -->
    <p>Total Income: {{ $totalIncome }}</p>
    <p>Total Expenses: {{ $totalExpense }}</p>
    <p>Net Income: {{ $totalIncome - $totalExpense }}</p>
    {{ $incomes->links() }}
</div>


<div class="container">
    <h1>Income Records</h1>
    <!-- ... -->
    @include('partials.financial_summary')
    {{ $incomes->links() }}
</div>
