@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4 class="mb-0">Edit Transaction</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('transactions.update', $transaction) }}" method="POST">
                        @csrf
                        @method('PUT')
                        
                        <div class="form-group">
                            <label for="description">Description:</label>
                            <input type="text" name="description" id="description" class="form-control" value="{{ $transaction->description }}" required>
                        </div>

                        <div class="form-group">
                            <label for="amount">Amount:</label>
                            <input type="number" step="0.01" name="amount" id="amount" class="form-control" value="{{ $transaction->amount }}" required>
                        </div>

                        <div class="form-group">
                            <label for="type">Type:</label>
                            <select name="type" id="type" class="form-control" required>
                                <option value="income" {{ $transaction->type == 'income' ? 'selected' : '' }}>Income</option>
                                <option value="expense" {{ $transaction->type == 'expense' ? 'selected' : '' }}>Expense</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="date">Date:</label>
                            <input type="date" name="date" id="date" class="form-control" value="{{ $transaction->date->format('Y-m-d') }}" required>
                        </div>

                        <div class="form-group">
                            <label for="category_id">Category:</label>
                            <select name="category_id" id="category_id" class="form-control">
                                <option value="">Select Category</option>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}" {{ $transaction->category_id == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Save</button>
                            <a href="{{ route('home') }}" class="btn btn-secondary">Back to Dashboard</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
