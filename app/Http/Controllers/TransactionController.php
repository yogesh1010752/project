<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\Category;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index()
    {
        $transactions = Transaction::where('user_id', auth()->id())->get();
        return view('transactions.index', compact('transactions'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('transactions.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'description' => 'required',
            'amount' => 'required|numeric',
            'type' => 'required',
            'date' => 'required|date',
            'category_id' => 'nullable|exists:categories,id',
        ]);

        Transaction::create([
            'user_id' => auth()->id(),
            'description' => $request->description,
            'amount' => $request->amount,
            'type' => $request->type,
            'date' => $request->date,
            'category_id' => $request->category_id,
        ]);

        return redirect()->route('transactions.index');
    }

    public function edit(Transaction $transaction)
    {
        $categories = Category::all();
        return view('transactions.edit', compact('transaction', 'categories'));
    }

    public function update(Request $request, Transaction $transaction)
    {
        $request->validate([
            'description' => 'required',
            'amount' => 'required|numeric',
            'type' => 'required',
            'date' => 'required|date',
            'category_id' => 'nullable|exists:categories,id',
        ]);

        $transaction->update([
            'description' => $request->description,
            'amount' => $request->amount,
            'type' => $request->type,
            'date' => $request->date,
            'category_id' => $request->category_id,
        ]);

        return redirect()->route('transactions.index');
    }

    public function destroy(Transaction $transaction)
    {
        $transaction->delete();
        return redirect()->route('transactions.index');
    }
}

