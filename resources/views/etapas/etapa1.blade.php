@extends('layouts.app')

@section('title', 'Etapa 1')

@section('content')

<style>
    @keyframes ondaDegrade {
        0% { background-position: 0% 50%; }
        25% { background-position: 50% 60%; }
        50% { background-position: 100% 50%; }
        75% { background-position: 50% 40%; }
        100% { background-position: 0% 50%; }
    }

    .bodyi {
        background-image: linear-gradient(to right,rgba(105, 226, 238, 1), rgba(10, 79, 145, 1));
        color: white;
        margin: 0;
        font-family: Arial, sans-serif;
        background-size: 200% 200%;
        animation: ondaDegrade 10s ease-in-out infinite;
        min-height: 100vh;
        background-repeat: no-repeat;
        background-attachment: fixed;
    }

    .jumbotron {
        background-image: linear-gradient(to right,rgba(105, 226, 253, 1), rgba(28, 139, 244, 1));
        color: white;
    }

    .conteudo {
        padding: 40px;
    }

    .btn-gradient {
        background: linear-gradient(to right, #0077ff, #0da1ce);
        border-radius: 30px;
        color: white;
        animation: ondaDegrade 10s ease-in-out infinite;
    }
</style>

<div class="bodyi">

    <div class="jumbotron">
        <div class="container">
            <h1><b>PERFILFIN:</b></h1>
            <h2><b>Etapa 1</b> <i class="bi bi-piggy-bank-fill"></i></h2>
        </div>
    </div>

    <div class="conteudo container">

        <p>{{ $nome ?? 'Usuário' }}, insira um número de 1 a 5:</p>
        <p>Se quiser deixar sem resposta, não selecione nada.</p>

        <form action="{{ route('etapas.store', 1) }}" method="POST">
            @csrf

            @php
                $perguntas = [
                    'Valorizo a importância de guardar dinheiro.',
                    'Evito gastar e economizo sempre que posso.',
                    'Costumo ser chamado de pão duro por economizar demais.',
                    'Sinto necessidade de guardar bastante dinheiro por segurança.',
                    'Tenho disciplina com o dinheiro.',
                    'Consigo resistir a compras desnecessárias.',
                    'Tenho opinião firme e raramente mudo.',
                    'Vivo com simplicidade e não me importo com status.',
                    'Não gosto de coisas novas que demandam custo.',
                    'Sinto dificuldade em correr riscos, mesmo podendo ter ganhos maiores.'
                ];
            @endphp

            @foreach ($perguntas as $i => $texto)
            <div class="form-group">
                <label><b>{{ $texto }}</b></label><br>

                @for ($n = 1; $n <= 5; $n++)
                    <label class="mr-3">
                        <input type="radio" name="q{{ $i+1 }}" value="{{ $n }}" required> {{ $n }}
                    </label>
                @endfor
            </div>
            @endforeach

            <button type="submit" class="btn btn-gradient"><i>Enviar</i></button>
        </form>

    </div>

</div>

@endsection
