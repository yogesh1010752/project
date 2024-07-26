@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="row mb-3">
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Total Income</h5>
                                    <p class="card-text">{{ $totalIncome }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Total Expenses</h5>
                                    <p class="card-text">{{ $totalExpenses }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Balance</h5>
                                    <p class="card-text">{{ $balance }}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h4>Categories</h4>
                    <a href="{{ route('categories.create') }}" class="btn btn-primary mb-3">Add Category</a>
                    <ul class="list-group mb-3">
                        @foreach ($categories as $category)
                            <li class="list-group-item">{{ $category->name }}</li>
                        @endforeach
                    </ul>

                    <h4>Transactions</h4>
                    <a href="{{ route('transactions.create') }}" class="btn btn-primary mb-3">Add Transaction</a>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Description</th>
                                <th>Amount</th>
                                <th>Type</th>
                                <th>Date</th>
                                <th>Category</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($transactions as $transaction)
                                <tr>
                                    <td>{{ $transaction->description }}</td>
                                    <td>{{ $transaction->amount }}</td>
                                    <td>{{ ucfirst($transaction->type) }}</td>
                                    <td>{{ $transaction->date }}</td>
                                    <td>{{ $transaction->category->name ?? 'N/A' }}</td>
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
