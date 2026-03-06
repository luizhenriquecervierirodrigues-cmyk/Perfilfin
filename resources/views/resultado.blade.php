@extends('layouts.app')

@section('title', 'Resultado')

@section('content')
<style>
    .dica-item {
        transition: all 0.5s ease;
        animation: fadeIn 0.5s;
    }

    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(-10px); }
        to { opacity: 1; transform: translateY(0); }
    }
    
    @keyframes ondaDegrade {
        0% { background-position: 0% 50%; }
        25% { background-position: 50% 60%; }
        50% { background-position: 100% 50%; }
        75% { background-position: 50% 40%; }
        100% { background-position: 0% 50%; }
    }

    .bodyi {
        background-image: linear-gradient(to right, rgba(60, 88, 65, 1), rgba(1, 1, 1, 1));
        color: #fff;
        margin: 0;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background-size: 200% 200%;
        animation: ondaDegrade 15s ease-in-out infinite;
        min-height: 100vh;
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
    }

    .resultado-card h1 { font-size: 2.5rem; margin-bottom: 10px; }
    .resultado-card h2 { font-size: 1.8rem; margin-top: 20px; margin-bottom: 20px; color: #ffd700; }
    .resultado-card h4 { margin-top: 25px; margin-bottom: 10px; font-weight: bold; color: #00ffff; }
    .resultado-card p { font-size: 1.1rem; line-height: 1.6; }

    .btn-custom {
        background: linear-gradient(to right, #6a0dad, #9b30ff);
        border: none;
        padding: 12px 30px;
        border-radius: 30px;
        color: #fff;
        font-weight: bold;
        margin-top: 30px;
        transition: 0.3s;
        text-decoration: none;
        display: inline-block;
    }

    .btn-custom:hover {
        transform: scale(1.05);
        box-shadow: 0 8px 20px rgba(0,0,0,0.4);
        color: #fff;
    }

    .HR { border-color: rgba(255,255,255,0.2); margin: 30px 0; }
    .TT { color: #f2ff02; }
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

        <hr class="HR">
        <h4 class="TT">Dicas para a sua melhora financeira:</h4>
        
        <div class="d-flex justify-content-center">
            <div style="text-align: left; width: 100%; max-width: 500px;">
                <ul id="listaDicas" style="color: #e0e0e0; list-style-type: none; padding: 0;">
                    @if($perfil == 'Poupador')
                        <li class="dica-item"><i class="bi bi-lightbulb-fill text-warning"></i> 1. Comece a diversificar em renda fixa turbinada.</li>
                        <li class="dica-item dica-extra d-none mt-2"><i class="bi bi-check2-circle"></i> 2. Defina metas de longo prazo (aposentadoria/imóvel).</li>
                        <li class="dica-item dica-extra d-none mt-2"><i class="bi bi-check2-circle"></i> 3. Não tenha medo de gastar com experiências.</li>
                        <li class="dica-item dica-extra d-none mt-2"><i class="bi bi-check2-circle"></i> 4. Estude sobre fundos imobiliários.</li>
                        <li class="dica-item dica-extra d-none mt-2"><i class="bi bi-check2-circle"></i> 5. Revise taxas de administração de bancos antigos.</li>

                    @elseif($perfil == 'Gastador')
                        <li class="dica-item"><i class="bi bi-lightbulb-fill text-warning"></i> 1. Crie uma "trava" de gasto no cartão de crédito.</li>
                        <li class="dica-item dica-extra d-none mt-2"><i class="bi bi-check2-circle"></i> 2. Espere 24h antes de qualquer compra por impulso.</li>
                        <li class="dica-item dica-extra d-none mt-2"><i class="bi bi-check2-circle"></i> 3. Priorize pagar dívidas com juros altos.</li>
                        <li class="dica-item dica-extra d-none mt-2"><i class="bi bi-check2-circle"></i> 4. Guarde 10% do salário logo que ele cair.</li>
                        <li class="dica-item dica-extra d-none mt-2"><i class="bi bi-check2-circle"></i> 5. Desative notificações de promoções.</li>

                    @elseif($perfil == 'Descontrolado')
                        <li class="dica-item"><i class="bi bi-lightbulb-fill text-warning"></i> 1. Comece anotando centavo por centavo em um app.</li>
                        <li class="dica-item dica-extra d-none mt-2"><i class="bi bi-check2-circle"></i> 2. Use dinheiro vivo para categorias de lazer.</li>
                        <li class="dica-item dica-extra d-none mt-2"><i class="bi bi-check2-circle"></i> 3. Cancele assinaturas de streaming que não usa.</li>
                        <li class="dica-item dica-extra d-none mt-2"><i class="bi bi-check2-circle"></i> 4. Fuja do cheque especial imediatamente.</li>
                        <li class="dica-item dica-extra d-none mt-2"><i class="bi bi-check2-circle"></i> 5. Procure um curso básico de finanças.</li>

                    @elseif($perfil == 'Desligado')
                        <li class="dica-item"><i class="bi bi-lightbulb-fill text-warning"></i> 1. Coloque todas as contas no débito automático.</li>
                        <li class="dica-item dica-extra d-none mt-2"><i class="bi bi-check2-circle"></i> 2. Tire um dia no mês para olhar seu saldo total.</li>
                        <li class="dica-item dica-extra d-none mt-2"><i class="bi bi-check2-circle"></i> 3. Ative alertas de SMS para cada gasto.</li>
                        <li class="dica-item dica-extra d-none mt-2"><i class="bi bi-check2-circle"></i> 4. Verifique anuidades de cartões parados.</li>
                        <li class="dica-item dica-extra d-none mt-2"><i class="bi bi-check2-circle"></i> 5. Comece uma reserva de emergência simples.</li>

                    @elseif($perfil == 'Financista')
                        <li class="dica-item"><i class="bi bi-lightbulb-fill text-warning"></i> 1. Explore investimentos internacionais (Stocks/REITs).</li>
                        <li class="dica-item dica-extra d-none mt-2"><i class="bi bi-check2-circle"></i> 2. Otimize sua carga tributária nos aportes.</li>
                        <li class="dica-item dica-extra d-none mt-2"><i class="bi bi-check2-circle"></i> 3. Use milhas e cashback de forma sistemática.</li>
                        <li class="dica-item dica-extra d-none mt-2"><i class="bi bi-check2-circle"></i> 4. Mantenha seu rebalanceamento atualizado.</li>
                        <li class="dica-item dica-extra d-none mt-2"><i class="bi bi-check2-circle"></i> 5. Compartilhe conhecimento com sua família.</li>
                    @endif
                </ul>

                <button id="btnVerMais" class="btn btn-sm btn-outline-info mt-3 w-100">
                    <i class="bi bi-plus-lg"></i> Ver mais
                </button>
            </div>
        </div>

        <a href="{{ url('/') }}" class="btn btn-custom">Página Inicial</a>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const btn = document.getElementById('btnVerMais');
        if(btn) {
            btn.addEventListener('click', function() {
                const todasExtras = document.querySelectorAll('.dica-extra');
                const extrasEscondidas = document.querySelectorAll('.dica-extra.d-none');

                if (extrasEscondidas.length > 0) {
                    extrasEscondidas[0].classList.remove('d-none');
                    if (extrasEscondidas.length === 1) {
                        this.innerHTML = '<i class="bi bi-dash-lg"></i> Ver menos';
                    }
                } else {
                    todasExtras.forEach(dica => dica.classList.add('d-none'));
                    this.innerHTML = '<i class="bi bi-plus-lg"></i> Ver mais';
                }
            });
        }
    });
</script>
@endsection
