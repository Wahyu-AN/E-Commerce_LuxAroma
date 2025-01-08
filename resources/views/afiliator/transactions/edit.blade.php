@extends('layouts.app')
@section('content')
<h1>Edit Transaction</h1>
<form action="{{ route('transactions.update', $transaction->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="quantity">Quantity</label>
        <input type="text" name="quantity" class="form-control" value="{{ $transaction->quantity }}" required>
    </div>
    <div class="form-group">
        <label for="status">Status</label>
        <select name="status" class="form-control" required>
            <option value="pending" {{ $transaction->status === 'pending' ? 'selected' : '' }}>Pending</option>
            <option value="completed" {{ $transaction->status === 'completed' ? 'selected' : '' }}>Completed</option>
        </select>
    </div>
    <button type="submit" class="btn btn-success">Update</button>
</form>
@endsection