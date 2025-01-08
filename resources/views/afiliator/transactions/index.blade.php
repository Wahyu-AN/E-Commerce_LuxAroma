@extends('layouts.app')
@section('content')
<h1>Manage Transactions</h1>
<a href="{{ route('transactions.create') }}" class="btn btn-primary">Create New Transaction</a>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Product Name</th>
            <th>Quantity</th>
            <th>Total</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($transactions as $transaction)
        <tr>
            <td>{{ $transaction->id }}</td>
            <td>{{ $transaction->product_name }}</td>
            <td>{{ $transaction->quantity }}</td>
            <td>{{ $transaction->total }}</td>
            <td>{{ $transaction->status }}</td>
            <td>
                <a href="{{ route('transactions.edit', $transaction->id) }}" class="btn btn-warning">Edit</a>
                <form action="{{ route('transactions.destroy', $transaction->id) }}" method="POST"
                    style="display:inline-block;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection