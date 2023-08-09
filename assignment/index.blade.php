@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Income Records</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Amount</th>
                    <th>Description</th>
                    <th>Category</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($incomes as $income)
                    <tr>
                        <td>{{ $income->date }}</td>
                        <td>{{ $income->amount }}</td>
                        <td>{{ $income->description }}</td>
                        <td>{{ $income->category }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $incomes->links() }}
    </div>
@endsection

