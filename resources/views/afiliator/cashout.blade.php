@extends('layouts.app')
@section('content')
<h1>Afiliator Cashout</h1>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Product Name</th>
            <th>Quantity</th>
            <th>Total</th>
            <th>Status</th>
            <th>Date</th>
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
            <td>{{ $transaction->created_at }}</td>
            <td>
                <form action="{{ route('transactions.destroy', $transaction->id) }}" method="POST">
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