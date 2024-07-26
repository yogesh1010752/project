@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4 class="mb-0">Add New Transaction</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('transactions.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="description">Description:</label>
                            <input type="text" name="description" id="description" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="amount">Amount:</label>
                            <input type="number" step="0.01" name="amount" id="amount" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="type">Type:</label>
                            <select name="type" id="type" class="form-control" required>
                                <option value="income">Income</option>
                                <option value="expense">Expense</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="date">Date:</label>
                            <input type="date" name="date" id="date" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="category_id">Category:</label>
                            <select name="category_id" id="category_id" class="form-control">
                                <option value="">Select Category</option>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary">Save</button>
                        <a href="{{ route('home') }}" class="btn btn-secondary">Back to Dashboard</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
