@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Income Record</h1>
        <form action="{{ route('incomes.update', $income) }}" method="POST">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label for="amount">Amount</label>
                <input type="text" name="amount" id="amount" class="form-control" value="{{ $income->amount }}">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <input type="text" name="description" id="description" class="form-control" value="{{ $income->description }}">
            </div>
            <div class="form-group">
                <label for="date">Date</label>
                <input type="date" name="date" id="date" class="form-control" value="{{ $income->date }}">
            </div>
            <div class="form-group">
                <label for="category">Category</label>
                <input type="text" name="category" id="category" class="form-control" value="{{ $income->category }}">
            </div>
            <button type="submit" class="btn btn-primary">Update Income</button>
        </form>
    </div>
@endsection
