<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $user_id = auth()->id();
        $total_income = Transaction::where('user_id', $user_id)->where('type', 'income')->sum('amount');
        $total_expenses = Transaction::where('user_id', $user_id)->where('type', 'expense')->sum('amount');
        $balance = $total_income - $total_expenses;

        return view('dashboard.index', compact('total_income', 'total_expenses', 'balance'));
    }
}
