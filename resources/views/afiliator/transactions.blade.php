@extends('backend.layouts.master')
@section('content')
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Transaksi Anda</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Produk</th>
                <th>Jumlah</th>
                <th>Total</th>
                <th>Tanggal</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($transactions as $transaction)
            <tr>
                <td>{{ $transaction->id }}</td>
                <td>{{ $transaction->product_name }}</td>
                <td>{{ $transaction->quantity }}</td>
                <td>{{ $transaction->total }}</td>
                <td>{{ $transaction->created_at }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection