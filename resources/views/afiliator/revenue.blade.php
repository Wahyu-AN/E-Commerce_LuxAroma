@extends('layouts.app')
@section('content')
<h1>Afiliator Revenue</h1>
<p>Total Revenue: {{ number_format($revenue, 2) }} USD</p>
@endsection