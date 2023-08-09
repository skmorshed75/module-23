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


<form action="{{ route('incomes.index') }}" method="GET">
    <div class="form-group">
        <label for="category">Category:</label>
        <input type="text" name="category" id="category" class="form-control" value="{{ request('category') }}">
    </div>
    <div class="form-group">
        <label for="start_date">Start Date:</label>
        <input type="date" name="start_date" id="start_date" class="form-control" value="{{ request('start_date') }}">
    </div>
    <div class="form-group">
        <label for="end_date">End Date:</label>
        <input type="date" name="end_date" id="end_date" class="form-control" value="{{ request('end_date') }}">
    </div>
    <button type="submit" class="btn btn-primary">Apply Filters</button>
</form>


@foreach ($incomes as $income)
    <tr>
        <!-- ... other columns -->
        <td>
            <form action="{{ route('incomes.destroy', $income) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
@endforeach
