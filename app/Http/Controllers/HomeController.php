<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Transaction;
use App\Models\Category;

class HomeController extends Controller
{
    public function index()
    {
        $userId = Auth::id();
        $totalIncome = Transaction::where('user_id', $userId)->where('type', 'income')->sum('amount');
        $totalExpenses = Transaction::where('user_id', $userId)->where('type', 'expense')->sum('amount');
        $balance = $totalIncome - $totalExpenses;

        $categories = Category::all();
        $transactions = Transaction::where('user_id', $userId)->get();

        return view('home', compact('totalIncome', 'totalExpenses', 'balance', 'categories', 'transactions'));
    }
}
