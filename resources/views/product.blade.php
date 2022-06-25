@extends('layouts.main')

@section('title', 'Prodouto')

@section('content')

    @if ($id != null)
        <p>Exibindo produto id: {{ $id }}</p>
    @endif

@endsection
