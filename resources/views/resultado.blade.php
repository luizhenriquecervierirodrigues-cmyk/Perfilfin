@extends('layouts.app')

@section('title', 'Resultado')

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
        background-image: linear-gradient(to right, rgba(60, 88, 65, 1), rgba(1, 1, 1, 1));
        color: #fff;
        margin: 0;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background-size: 200% 200%;
        animation: ondaDegrade 15s ease-in-out infinite;
        min-height: 100vh;
        background-repeat: no-repeat;
        background-attachment: fixed;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 40px 0;
    }

    .resultado-card {
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(15px);
        border-radius: 20px;
        padding: 40px;
        max-width: 800px;
        width: 90%;
        box-shadow: 0 8px 25px rgba(0,0,0,0.3);
        text-align: center;
        color: #fff;
        animation: ondaDegrade 10s ease-in-out infinite;
    }

    .resultado-card h1 {
        font-size: 2.5rem;
        margin-bottom: 10px;
    }

    .resultado-card h2 {
        font-size: 1.8rem;
        margin-top: 20px;
        margin-bottom: 20px;
        color: #ffd700;
    }

    .resultado-card h4 {
        margin-top: 25px;
        margin-bottom: 10px;
        font-weight: bold;
        color: #00ffff;
    }

    .resultado-card p {
        font-size: 1.1rem;
        line-height: 1.6;
    }

    .btn-custom {
        background: linear-gradient(to right, #6a0dad, #9b30ff);
        border: none;
        padding: 12px 30px;
        border-radius: 30px;
        color: #fff;
        font-weight: bold;
        margin-top: 30px;
        transition: 0.3s;
    }

    .btn-custom:hover {
        transform: scale(1.05);
        box-shadow: 0 8px 20px rgba(0,0,0,0.4);
    }
</style>

<div class="bodyi">
    <div class="resultado-card">
        <h1><b>PERFILFIN</b></h1>
        <h1><b>Resultado:</b> <i class="bi bi-check-circle-fill"></i></h1>

        <h2>Perfil financeiro: {{ $perfil }}</h2>

        <h4>Pontos fortes:</h4>
        <p>{{ $fortes }}</p>

        <h4>Pontos a melhorar:</h4>
        <p>{{ $melhorar }}</p>

        <a class="btn btn-custom" href="{{ route('index') }}">Página Inicial</a>
    </div>
</div>
@endsection
