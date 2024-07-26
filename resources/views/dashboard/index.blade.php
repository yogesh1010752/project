@extends('layouts.app')

@section('content')
    <h1>Dashboard</h1>
    <div>
        <h2>Total Income: ${{ number_format($total_income, 2) }}</h2>
        <h2>Total Expenses: ${{ number_format($total_expenses, 2) }}</h2>
        <h2>Balance: ${{ number_format($balance, 2) }}</h2>
    </div>
@endsection
