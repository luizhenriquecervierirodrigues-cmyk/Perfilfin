@extends('layouts.app')

@section('title', 'Etapa 5')

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
        background-image: linear-gradient(to right, rgba(14, 125, 103, 1), rgba(1, 1, 1, 1));
        color: #fff;
        margin: 0;
        font-family: Arial, sans-serif;
        background-size: 200% 200%;
        animation: ondaDegrade 10s ease-in-out infinite;
        min-height: 100vh;
        background-repeat: no-repeat;
        background-attachment: fixed;
        padding-bottom: 50px;
    }

    .jumbotron{
        background-image: linear-gradient(to right, rgba(112, 255, 238, 0.62), rgba(11, 126, 126, 1));
        color: #fff;
        padding: 2rem 1rem;
    }

    .container{
        max-width: 900px;
        margin: 0 auto;
        padding: 20px;
    }

    .form-group label{
        font-weight: bold;
    }

    .btn.btn-gradient{
        background: linear-gradient(to right, #0d8e7cff, #3f3f3eff);
        border-radius: 30px;
        color: white;
        animation: ondaDegrade 10s ease-in-out infinite;
    }

    .form-check-inline label{
        margin-right: 15px;
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
            <h2><b>Etapa 5</b> <i class="bi bi-bar-chart-line-fill"></i></h2>
        </div>
    </div>

    <div class="container">
        <p>Essa é a última etapa!</p>

        <form action="{{ route('etapas.store', 5) }}" method="POST">
            @csrf

            @php
                $questoes = [
                    41 => 'A disciplina no controle dos gastos tem ajudado você a alcançar seus objetivos financeiros.',
                    42 => 'Nem sempre economiza, mas procura a melhor compra.',
                    43 => 'Planeja e se organiza para fazer melhores compras.',
                    44 => 'Você entende de investimentos e costuma ser procurado para dar dicas financeiras.',
                    45 => 'Consegue transformar planos em ações práticas.',
                    46 => 'Você tem boa capacidade de investimento.',
                    47 => 'Uso o dinheiro de forma estratégica.',
                    48 => 'Faz escolhas conscientes e estratégicas na hora da compra.',
                    49 => 'Tem dificuldade com os familiares seguirem o planejamento financeiro.',
                    50 => 'Você já foi chamado de "chato" por prestar atenção demais aos detalhes financeiros.'
                ];
            @endphp

            @foreach($questoes as $num => $texto)
                <div class="form-group">
                    <label for="q{{ $num }}">{{ $texto }}</label><br>
                    @for($i = 1; $i <= 5; $i++)
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="q{{ $num }}" id="q{{ $num }}-{{ $i }}" value="{{ $i }}" {{ old('q'.$num) == $i ? 'checked' : '' }} required>
                            <label class="form-check-label" for="q{{ $num }}-{{ $i }}">{{ $i }}</label>
                        </div>
                    @endfor
                </div>
            @endforeach

            <a class="btn btn-info" href="{{ route('etapas.show', 4)}}"><- Voltar</a>
            <button type="submit" class="btn btn-gradient"><i>Enviar</i></button>
        </form>
    </div>
</div>

@endsection
