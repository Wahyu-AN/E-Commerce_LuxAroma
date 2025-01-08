@extends('layouts.app')
@section('content')
<h1>Transaction Details</h1>
<table class="table">
    <tr>
        <th>ID:</th>
        <td>{{ $transaction->id }}</td>
    </tr>
    <tr>
        <th>Product Name:</th>
        <td>{{ $transaction->product_name }}</td>
    </tr>
    <tr>
        <th>Quantity:</th>
        <td>{{ $transaction->quantity }}</td>
    </tr>
    <tr>
        <th>Total:</th>
        <td>{{ $transaction->total }}</td>
    </tr>
    <tr>
        <th>Status:</th>
        <td>{{ $transaction->status }}</td>
    </tr>
    <tr>
        <th>Date:</th>
        <td>{{ $transaction->created_at }}</td>
    </tr>
</table>
<a href="{{ route('transactions.index') }}" class="btn btn-secondary">Back to Transactions</a>
@endsection