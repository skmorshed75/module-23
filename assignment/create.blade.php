<?php

/*
In your resources/views directory, create a new folder named incomes and another named expenses.
Inside the incomes folder, create a file named create.blade.php

Repeat the same steps for the expenses folder and create a create.blade.php file for expenses with a similar form.
*/

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Add New Income</h1>
        <form action="{{ route('incomes.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="amount">Amount</label>
                <input type="text" name="amount" id="amount" class="form-control" value="{{ old('amount') }}">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <input type="text" name="description" id="description" class="form-control" value="{{ old('description') }}">
            </div>
            <div class="form-group">
                <label for="date">Date</label>
                <input type="date" name="date" id="date" class="form-control" value="{{ old('date') }}">
            </div>
            <div class="form-group">
                <label for="category">Category</label>
                <input type="text" name="category" id="category" class="form-control" value="{{ old('category') }}">
            </div>
            <button type="submit" class="btn btn-primary">Add Income</button>
        </form>
    </div>
@endsection
