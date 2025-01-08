<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use Illuminate\Support\Facades\Auth;

class AfiliatorTransactionController extends Controller
{
    public function index()
    {
        $transactions = Auth::user()->role === 'admin' ? Transaction::all() : Transaction::where('afiliator_id', Auth::id())->get();
        return view('afiliator.transactions.index', compact('transactions'));
    }

    public function create()
    {
        return view('afiliator.transactions.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'quantity' => 'required|numeric',
            'status' => 'required|string'
        ]);

        Transaction::create([
            'user_id' => Auth::id(),
            'afiliator_id' => Auth::id(),
            'quantity' => $request->quantity,
            'status' => $request->status
        ]);

        return redirect()->route('transactions.index')->with('success', 'Transaction created successfully.');
    }

    public function show($id)
    {
        $transaction = Transaction::findOrFail($id);
        return view('afiliator.transactions.show', compact('transaction'));
    }

    public function edit($id)
    {
        $transaction = Transaction::findOrFail($id);
        return view('afiliator.transactions.edit', compact('transaction'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'quantity' => 'required|numeric',
            'status' => 'required|string'
        ]);

        $transaction = Transaction::findOrFail($id);
        $transaction->update($request->all());

        return redirect()->route('transactions.index')->with('success', 'Transaction updated successfully.');
    }

    public function destroy($id)
    {
        $transaction = Transaction::findOrFail($id);
        $transaction->delete();

        return redirect()->route('transactions.index')->with('success', 'Transaction deleted successfully.');
    }
}