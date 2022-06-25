@extends('layouts.main')

@section('title', 'Produtos')

@section('content')
        <h2>Tela de produtos</h2>
        @if ($busca != '')
            <p>Usuario esta buscando por: {{ $busca }}</p>
        @endif
@endsection
