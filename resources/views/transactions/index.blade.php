@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mb-4">
        <div class="col-md-12">
            <h1 class="mb-4">Transactions</h1>

            <!-- Back to Dashboard Button -->
            <a href="{{ route('home') }}" class="btn btn-secondary mb-3">Back to Dashboard</a>

            <!-- Success or Error Message -->
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @elseif (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif

            <!-- Add New Transaction Button -->
            <a href="{{ route('transactions.create') }}" class="btn btn-primary mb-3">Add New Transaction</a>

            <!-- Transactions Table -->
            <div class="card">
                <div class="card-header">
                    <h4 class="mb-0">Transaction List</h4>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Description</th>
                                <th>Amount</th>
                                <th>Type</th>
                                <th>Date</th>
                                <th>Category</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($transactions as $transaction)
                                <tr>
                                    <td>{{ $transaction->description }}</td>
                                    <td>${{ number_format($transaction->amount, 2) }}</td>
                                    <td>{{ ucfirst($transaction->type) }}</td>
                                    <td>{{ $transaction->date->format('Y-m-d') }}</td>
                                    <td>{{ $transaction->category->name ?? 'N/A' }}</td>
                                    <td>
                                        <a href="{{ route('transactions.edit', $transaction) }}" class="btn btn-warning btn-sm">Edit</a>
                                        <form action="{{ route('transactions.destroy', $transaction) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
