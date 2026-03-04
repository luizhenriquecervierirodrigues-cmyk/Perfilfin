@extends('layouts.app')

@section('title', 'Etapa 3')

@section('content')

<style>
    @keyframes ondaDegrade {
        0% { background-position: 0% 50%; }
        25% { background-position: 50% 60%; }
        50% { background-position: 100% 50%; }
        75% { background-position: 50% 40%; }
        100% { background-position: 0% 50%; }
    }

    .bodyi{
        background-image: linear-gradient(to right,rgba(255, 204, 2, 1), rgba(1,1,1,1));
        color: white;
        margin: 0;
        font-family: Arial, sans-serif;
        background-size: 200% 200%;
        animation: ondaDegrade 10s ease-in-out infinite;
        min-height: 100vh;
        background-repeat: no-repeat;
        background-attachment: fixed;
        padding-bottom: 40px;
    }

    .jumbotron{
        background-image: linear-gradient(to right,rgba(255, 189, 9, 0.93), rgba(239, 210, 17, 0.77));
        color: white;
    }

    .conteudo{
        padding: 40px;
    }

    .btn-gradient{
        background: linear-gradient(to right, #ffea03ff, #ffbb0fff);
        border-radius: 30px;
        color: white;
        animation: ondaDegrade 10s ease-in-out infinite;
    }

    .btn-info{
        border-radius: 30px;
        color: white;
        animation: ondaDegrade 10s ease-in-out infinite;
    }
</style>

<div class="bodyi">

    <div class="jumbotron">
        <div class="container">
            <h1><b>PERFILFIN:</b></h1>
            <h2><b>Etapa 3</b> <i class="bi bi-tornado"></i></h2>
        </div>
    </div>

    <div class="conteudo container">

        <p>Já estamos na metade do processo?!</p>

        <form action="{{ route('etapas.store', 3) }}" method="POST">
            @csrf

            @php
                $perguntas = [
                    'Não tenho controle de quanto ganho e gasto.',
                    'Tenho a sensação de que o dinheiro "desaparece" todo mês.',
                    'Sempre corto gastos, mas parece nunca ser suficiente.',
                    'Uso com frequência o limite da conta ou cartão de crédito.',
                    'Nunca tenho tempo para organizar minhas finanças.',
                    'Gosto de agradar os outros, mesmo que haja custos.',
                    'Prefiro gastar quando tenho dinheiro, do que pensar a respeito.',
                    'Percebo que o dinheiro é causa frequente de conflitos familiares.',
                    'Costumo pagar juros e multas por descuido.',
                    'Sinto-me perdido com relação a finanças.'
                ];
            @endphp

            @foreach ($perguntas as $i => $texto)
                <div class="form-group">
                    <label><b>{{ $texto }}</b></label><br>

                    @for ($n = 1; $n <= 5; $n++)
                        <label class="mr-3">
                            <input type="radio" name="q{{ $i+21 }}" value="{{ $n }}" required> {{ $n }}
                        </label>
                    @endfor
                </div>
            @endforeach

            <a class="btn btn-info" href="{{ route('etapas.show', 2)}}"><- Voltar</a>
            <button type="submit" class="btn btn-gradient"><i>Enviar</i></button>

        </form>

    </div>

</div>

@endsection
