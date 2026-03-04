@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="jumbotron">
    <h1><b>PERFILFIN <i class="bi bi-currency-dollar"></i></b></h1>
    <h3>Seu perfil financeiro em poucas perguntas, simples assim.</h3>
</div>

<div class="mt-4">
    <p>Seja bem-vindo ao PERFILFIN, um simulador que revela seu perfil financeiro, te oferecendo dicas consistentes, confiáveis e personalizadas!</p>

    <h5>Funcionará da seguinte forma:</h5>
    <ul>
        <li>O poupador: poupança <i class="bi bi-piggy-bank-fill"></i></li>
        <li>O gastador: consumo e status <i class="bi bi-fire"></i></li>
        <li>O descontrolado: controle e segurança <i class="bi bi-tornado"></i></li>
        <li>O desligado: conhecimentos <i class="bi bi-toggle2-off"></i></li>
        <li>O financista: metas e investimentos <i class="bi bi-bar-chart-line-fill"></i></li>
    </ul>

    <p>Ir para o questionário:</p>
    <a class="btn btn-info" href="{{ route('etapas.show', 1) }}">Iniciar Questionário</a>
</div>
@endsection
