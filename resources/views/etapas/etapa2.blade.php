@extends('layouts.app')

@section('title', 'Etapa 2')

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
        background-image: linear-gradient(to right,rgba(195, 44, 44, 1), rgba(1,1,1,1));
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
        background-image: linear-gradient(to right,rgba(255, 0, 0, 0.82), rgba(191, 41, 41, 0.84));
        color: white;
    }

    .conteudo{
        padding: 40px;
    }

    .btn-gradient{
        background: linear-gradient(to right, #ff0000ff, #903109ff);
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
            <h2><b>Etapa 2</b> <i class="bi bi-fire"></i></h2>
        </div>
    </div>

    <div class="conteudo container">

        <p>Vamos nos aprofundar.</p>

        <form action="{{ route('etapas.store', 2) }}" method="POST">
            @csrf

            @php
                $perguntas = [
                    'Acredito que é melhor aproveitar o hoje, do que pensar no amanhã.',
                    'Gasto toda a renda e às vezes mais do que tenho.',
                    'Topo fazer financiamentos longos para ter o que desejo.',
                    'Já me senti admirado pelo meu estilo de vida.',
                    'Estou sempre disposto a experimentar novas tendências.',
                    'Possuo muitos hobbies.',
                    'Sou visto como uma pessoa boa de conversar e interessante.',
                    'Tenho dependência extrema da estabilidade do trabalho ou negócio.',
                    'Sinto insegurança com relação ao meu futuro financeiro.',
                    'Não tenho reserva de emergência.'
                ];
            @endphp

            @foreach ($perguntas as $i => $texto)
                <div class="form-group">
                    <label><b>{{ $texto }}</b></label><br>

                    @for ($n = 1; $n <= 5; $n++)
                        <label class="mr-3">
                            <input type="radio" name="q{{ $i+11 }}" value="{{ $n }}" required> {{ $n }}
                        </label>
                    @endfor
                </div>
            @endforeach

            <a class="btn btn-info" href="{{ route('etapas.show', 1) }}"><- Voltar</a>
            <button type="submit" class="btn btn-gradient"><i>Enviar</i></button>
        </form>

    </div>

</div>

@endsection
