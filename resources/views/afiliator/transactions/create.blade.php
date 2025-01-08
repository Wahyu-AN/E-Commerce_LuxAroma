@extends('layouts.app')
@section('content')
<h1>Create New Transaction</h1>
<form action="{{ route('transactions.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="quantity">Quantity</label>
        <input type="text" name="quantity" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="status">Status</label>
        <select name="status" class="form-control" required>
            <option value="pending">Pending</option>
            <option value="completed">Completed</option>
        </select>
    </div>
    <button type="submit" class="btn btn-success">Save</button>
</form>
@endsection