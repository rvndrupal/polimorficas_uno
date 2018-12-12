@extends('admin.base')

@section('content')

<h1>Panel de Control</h1>

<p>Usuario: {{ auth()->user()->name }}</p>

@endsection