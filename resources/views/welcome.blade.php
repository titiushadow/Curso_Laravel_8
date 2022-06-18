<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/css/style.css">
        <script src="/js/script.js"></script>

        <title>Laravel</title>
        <img src="/img/banner.jpg" alt="banner">

    </head>
    <body>
        <h2>Hello World</h2>

        {{-- Vendo como funciona @if e @else --}}
        {{-- @if (10 > 11)
            <p>A condição é true</p>
        @else
            <p>a condição é falsa</p>
        @endif --}}

        {{-- trabalhando com dados dinamicos --}}
        {{-- <p>{{  $nome }}</p>

        @if($nome == "Paulo")
            <p>O nome é Pedro</p>
        @elseif($nome == "Mesaque")
            <p>O nome é {{ $nome }} e ele tem {{ $idade }} anos, e trabalha como {{ $profissao }}</p>
        @else
            <p>O nome não é Paulo</p>
        @endif

        @for($i = 0; $i < count($array); $i++)
            <p>{{ $array[$i] }} - {{ $i }}</p>
            @if ($i == 2)
             <p>O i é 2</p>
            @endif
        @endfor

        @foreach ($nomes as $nome )
        <P>{{$loop->index}}</P>
            <p>{{ $nome }}</p>
        @endforeach --}}

        {{-- Posso rodar codigo php puro no blade --}}
        {{-- @php
            $name = "Mesaque";
            echo $name;
        @endphp --}}
    </body>
</html>
