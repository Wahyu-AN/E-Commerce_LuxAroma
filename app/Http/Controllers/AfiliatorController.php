<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use Illuminate\Support\Facades\Auth;

class AfiliatorController extends Controller
{
    public function index()
    {
        $transactions = Transaction::where('afiliator_id', Auth::id())->get();
        return view('afiliator.dashboard', compact('transactions'));
    }

    public function transactions()
    {
        $transactions = Transaction::where('afiliator_id', Auth::id())->get();
        return view('afiliator.transactions', compact('transactions'));
    }

    public function revenue()
    {
        $revenue = Transaction::where('afiliator_id', Auth::id())->sum('quantity');
        return view('afiliator.revenue', compact('revenue'));
    }

    public function cashout(Request $request)
    {
        $transactions = Transaction::where('afiliator_id', Auth::id())->where('status', 'pending')->get();
        return view('afiliator.cashout', compact('transactions'));
    }
}