<div class="container">
    <h1>Expense Records</h1>
    <!-- ... -->
    <p>Total Income: {{ $totalIncome }}</p>
    <p>Total Expenses: {{ $totalExpense }}</p>
    <p>Net Income: {{ $totalIncome - $totalExpense }}</p>
    {{ $expenses->links() }}
</div>


<div class="container">
    <h1>Expense Records</h1>
    <!-- ... -->
    @include('partials.financial_summary')
    {{ $expenses->links() }}
</div>
