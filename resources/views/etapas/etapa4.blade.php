@extends('layouts.app')

@section('title', 'Etapa 4')

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
        background-image: linear-gradient(to right,rgba(74, 75, 75, 1), rgba(1, 1, 1, 1)); 
        color: rgb(255, 255, 255); 
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
        background-image: linear-gradient(to right,rgba(106, 103, 103, 0.82), rgba(27, 27, 27, 0.84)); 
        color: rgb(255, 255, 255); 
    } 
    .container{ 
        max-width: 900px; 
        margin: 0 auto; 
        padding: 20px; 
    } 
    .conteudo{ 
        padding: 40px; 
    } 
    .btn.btn-gradient{ 
        background: linear-gradient(to right, #828282ff, #3f3f3eff); 
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

<div class="jumbotron">
    <div class="container">
        <h1><b>PERFILFIN:</b></h1>
        <h2><b>Etapa 4</b>  <i class="bi bi-toggle2-off"></i></h2>
    </div>
</div>

<div class="container conteudo bodyi">
    <p>De 1 a 5.</p>

    <form action="{{ route('etapas.store', 4) }}" method="POST">
        @csrf

        @php
            $questoes = [
                31 => 'Gasta menos do que ganha, mas não sabe quanto.',
                32 => 'Poupa o que sobra, quando sobra.',
                33 => 'Viaja ou troca de carro quando recebe uma bonificação no trabalho ou fecha um negócio maior.',
                34 => 'Se não tem dinheiro para pagar à vista, parcela a compra.',
                35 => 'Escondem os extratos nas gavetas, antes de abrir para ver o valor.',
                36 => 'Não sabe quanto será a fatura do cartão de crédito do próximo mês.',
                37 => 'Frase lema: “O futuro a Deus pertence.”',
                38 => 'Tem folgas financeiras eventualmente.',
                39 => 'Pode reduzir gastos, se quiser cuidar disso.',
                40 => 'Deixa que outra pessoa cuide do financeiro.'
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

        <a class="btn btn-info" href="{{ route('etapas.show', 3)}}"><- Voltar</a>
        <button type="submit" class="btn btn-gradient"><i>Enviar</i></button>
    </form>
</div>

@endsection
