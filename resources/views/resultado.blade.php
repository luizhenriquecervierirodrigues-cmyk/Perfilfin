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
                        <li class="dica-item"><i class="bi bi-lightbulb-fill text-warning"></i> 1. Muito bom! Você já tem uma base ótima. Agora pense também em como fazer esse dinheiro crescer.</li>
                        <li class="dica-item dica-extra d-none mt-2"><i class="bi bi-check2-circle"></i> 2. Continuar guardando é ótimo, só não esqueça de aproveitar um pouquinho a vida também.</li>
                        <li class="dica-item dica-extra d-none mt-2"><i class="bi bi-check2-circle"></i> 3. Boa atitude! Só cuidado para não se limitar demais e perder momentos legais.</li>
                        <li class="dica-item dica-extra d-none mt-2"><i class="bi bi-check2-circle"></i> 4. Economizar é bom, mas tudo com equilíbrio. Permita-se pequenos gostos às vezes.</li>
                        <li class="dica-item dica-extra d-none mt-2"><i class="bi bi-check2-circle"></i> 5. Pode ser que às vezes você passe do ponto. Tente relaxar um pouco com o dinheiro.</li>
                        <li class="dica-item dica-extra d-none mt-2"><i class="bi bi-check2-circle"></i> 6. Guardar é importante, mas você também merece se presentear de vez em quando.</li>
                        <li class="dica-item dica-extra d-none mt-2"><i class="bi bi-check2-circle"></i> 7. É normal querer ter segurança. Só cuide para isso não virar preocupação constante.</li>
                        <li class="dica-item dica-extra d-none mt-2"><i class="bi bi-check2-circle"></i> 8. Você faz bem em se prevenir, mas tente confiar mais no seu planejamento.</li>
                        <li class="dica-item dica-extra d-none mt-2"><i class="bi bi-check2-circle"></i> 9. Ótimo! Use essa disciplina para realizar sonhos maiores.</li>
                        <li class="dica-item dica-extra d-none mt-2"><i class="bi bi-check2-circle"></i> 10. Continue firme, mas lembre-se de ser gentil com você quando algo sair do planejado.</li>
                        <li class="dica-item dica-extra d-none mt-2"><i class="bi bi-check2-circle"></i> 11. Isso é um ponto super positivo! Aproveite para organizar metas legais.</li>
                        <li class="dica-item dica-extra d-none mt-2"><i class="bi bi-check2-circle"></i> 12. Muito bom! Só não se cobre demais para economizar o tempo todo.</li>
                        <li class="dica-item dica-extra d-none mt-2"><i class="bi bi-check2-circle"></i> 13. Parabéns pelo autocontrole! Só não deixe isso te tornar rígido demais.</li>
                        <li class="dica-item dica-extra d-none mt-2"><i class="bi bi-check2-circle"></i> 14. Você faz boas escolhas. Só veja se não está evitando tudo, até o que pode te fazer bem.</li>
                        <li class="dica-item dica-extra d-none mt-2"><i class="bi bi-check2-circle"></i> 15. Ter firmeza é bom, mas ouvir outras ideias também ajuda muito.</li>
                        <li class="dica-item dica-extra d-none mt-2"><i class="bi bi-check2-circle"></i> 16. Você sabe o que quer, mas tente ser mais aberto(a) quando algo puder te beneficiar.</li>
                        <li class="dica-item dica-extra d-none mt-2"><i class="bi bi-check2-circle"></i> 17. Isso é ótimo! A vida fica mais leve assim.</li>
                        <li class="dica-item dica-extra d-none mt-2"><i class="bi bi-check2-circle"></i> 18. Simplicidade é uma força, mas se quiser algo a mais, não se sinta culpado(a).</li>
                        <li class="dica-item dica-extra d-none mt-2"><i class="bi bi-check2-circle"></i> 19. Normal ser cuidadoso(a), só lembre que algumas novidades podem valer a pena.</li>
                        <li class="dica-item dica-extra d-none mt-2"><i class="bi bi-check2-circle"></i> 20. Antes de recusar, veja o custo-benefício — às vezes pode te ajudar muito.</li>
                        <li class="dica-item dica-extra d-none mt-2"><i class="bi bi-check2-circle"></i> 21. Você não precisa arriscar muito, mas pode começar com pequenos passos.</li>
                        <li class="dica-item dica-extra d-none mt-2"><i class="bi bi-check2-circle"></i> 22. Procurar informação pode te deixar mais seguro(a) para tentar coisas novas.</li>
                        <li class="dica-item dica-extra d-none mt-2"><i class="bi bi-check2-circle"></i> 23. Tente conversar e achar um meio-termo para evitar conflitos.</li>
                        <li class="dica-item dica-extra d-none mt-2"><i class="bi bi-check2-circle"></i> 24. Você não precisa gostar das mesmas coisas, mas dá pra entender o lado do outro.</li>

                    @elseif($perfil == 'Gastador')
                        <li class="dica-item"><i class="bi bi-lightbulb-fill text-warning"></i> 1. Tente olhar com carinho para seus gastos. Pequenos ajustes já fazem diferença.</li>
                        <li class="dica-item dica-extra d-none mt-2"><i class="bi bi-check2-circle"></i> 2. Você merece usar seu dinheiro, mas é bom guardar um pouquinho para não passar aperto depois.</li>
                        <li class="dica-item dica-extra d-none mt-2"><i class="bi bi-check2-circle"></i> 3. Pense se realmente vale a pena assumir algo tão longo — às vezes dá para esperar um pouco.</li>
                        <li class="dica-item dica-extra d-none mt-2"><i class="bi bi-check2-circle"></i> 4. Antes de fechar um financiamento, veja se não existe uma opção mais leve para você.</li>
                        <li class="dica-item dica-extra d-none mt-2"><i class="bi bi-check2-circle"></i> 5. É legal querer se sentir bem, só cuide para não gastar além do que pode.</li>
                        <li class="dica-item dica-extra d-none mt-2"><i class="bi bi-check2-circle"></i> 6. Seu valor não está no que você compra — tente não se pressionar por isso.</li>
                        <li class="dica-item dica-extra d-none mt-2"><i class="bi bi-check2-circle"></i> 7. Legal ter esse espírito aberto! Só tente medir se a tendência cabe no seu orçamento.</li>
                        <li class="dica-item dica-extra d-none mt-2"><i class="bi bi-check2-circle"></i> 8. Testar coisas novas é bom, mas nem tudo precisa ser comprado na hora.</li>
                        <li class="dica-item dica-extra d-none mt-2"><i class="bi bi-check2-circle"></i> 9. Hobbies são importantes, mas tente controlar o quanto cada um custa.</li>
                        <li class="dica-item dica-extra d-none mt-2"><i class="bi bi-check2-circle"></i> 10. Dá para manter seus hobbies, só organize para que eles não virem despesas pesadas.</li>
                        <li class="dica-item dica-extra d-none mt-2"><i class="bi bi-check2-circle"></i> 11. Isso é ótimo! Só lembre que momentos legais não precisam sempre envolver gastos.</li>
                        <li class="dica-item dica-extra d-none mt-2"><i class="bi bi-check2-circle"></i> 12. Você pode continuar sendo sociável sem usar o dinheiro como parte essencial disso.</li>
                        <li class="dica-item dica-extra d-none mt-2"><i class="bi bi-check2-circle"></i> 13. Isso pode afetar suas finanças; tente planejar um pouco mais cada passo.</li>
                        <li class="dica-item dica-extra d-none mt-2"><i class="bi bi-check2-circle"></i> 14. Busque rotina e organização — elas ajudam muito a trazer mais segurança.</li>
                        <li class="dica-item dica-extra d-none mt-2"><i class="bi bi-check2-circle"></i> 15. Essa sensação é comum; comece aos poucos criando uma reserva.</li>
                        <li class="dica-item dica-extra d-none mt-2"><i class="bi bi-check2-circle"></i> 16. Se organize com pequenas metas — isso já traz mais tranquilidade.</li>
                        <li class="dica-item dica-extra d-none mt-2"><i class="bi bi-check2-circle"></i> 17. Comece com pouco: guardar R$10 ou R$20 já é um ótimo início.</li>
                        <li class="dica-item dica-extra d-none mt-2"><i class="bi bi-check2-circle"></i> 18. Tente separar algo sempre que puder; isso vai te dar mais paz.</li>
                        <li class="dica-item dica-extra d-none mt-2"><i class="bi bi-check2-circle"></i> 19. Garanta que seu estilo de vida esteja sempre dentro do seu orçamento.</li>
                        <li class="dica-item dica-extra d-none mt-2"><i class="bi bi-check2-circle"></i> 20. Antes de comprar, se pergunte: "Isso é um valor meu ou só uma moda passageira?".</li>
                        <li class="dica-item dica-extra d-none mt-2"><i class="bi bi-check2-circle"></i> 21. Escolha 1 ou 2 hobbies principais e evite o gasto excessivo em atividades simultâneas.</li>
                        <li class="dica-item dica-extra d-none mt-2"><i class="bi bi-check2-circle"></i> 22. Use sua boa comunicação para negociar ou buscar parcerias financeiras.</li>
                        <li class="dica-item dica-extra d-none mt-2"><i class="bi bi-check2-circle"></i> 23. Comece a estruturar uma fonte de renda extra para aumentar sua segurança.</li>

                    @elseif($perfil == 'Descontrolado')
                        <li class="dica-item"><i class="bi bi-lightbulb-fill text-warning"></i> 1. Comece bem devagar: anote só os gastos principais. Já ajuda muito.</li>
                        <li class="dica-item dica-extra d-none mt-2"><i class="bi bi-check2-circle"></i> 2. Você não precisa fazer tudo perfeito; só tente ter uma noção melhor do que entra e sai.</li>
                        <li class="dica-item dica-extra d-none mt-2"><i class="bi bi-check2-circle"></i> 3. Vale a pena olhar isso com calma — saber seus números traz segurança.</li>
                        <li class="dica-item dica-extra d-none mt-2"><i class="bi bi-check2-circle"></i> 4. Tente anotar um dia ou dois; quando ver o resultado, vai querer continuar.</li>
                        <li class="dica-item dica-extra d-none mt-2"><i class="bi bi-check2-circle"></i> 5. Essa sensação é normal quando a gente não registra gastos. Um caderno pode resolver.</li>
                        <li class="dica-item dica-extra d-none mt-2"><i class="bi bi-check2-circle"></i> 6. Só de observar para onde o dinheiro vai, você já começa a sentir mais controle.</li>
                        <li class="dica-item dica-extra d-none mt-2"><i class="bi bi-check2-circle"></i> 7. Respire. Todo mundo começa assim — um passo de cada vez.</li>
                        <li class="dica-item dica-extra d-none mt-2"><i class="bi bi-check2-circle"></i> 8. Tente organizar só uma coisa por vez, como anotar o que gasta hoje.</li>
                        <li class="dica-item dica-extra d-none mt-2"><i class="bi bi-check2-circle"></i> 9. Uma conversa aberta já pode aliviar muito.</li>
                        <li class="dica-item dica-extra d-none mt-2"><i class="bi bi-check2-circle"></i> 10. Talvez dividir pequenas responsabilidades ajude a reduzir os conflitos.</li>
                        <li class="dica-item dica-extra d-none mt-2"><i class="bi bi-check2-circle"></i> 11. Coloque lembretes no celular — isso já evita vários atrasos.</li>
                        <li class="dica-item dica-extra d-none mt-2"><i class="bi bi-check2-circle"></i> 12. Não se culpe; só tente acompanhar mais de perto as datas.</li>
                        <li class="dica-item dica-extra d-none mt-2"><i class="bi bi-check2-circle"></i> 13. Planos podem ser simples: comece com pequenas metas.</li>
                        <li class="dica-item dica-extra d-none mt-2"><i class="bi bi-check2-circle"></i> 14. Ajuste o plano ao seu jeito, não ao contrário.</li>
                        <li class="dica-item dica-extra d-none mt-2"><i class="bi bi-check2-circle"></i> 15. Isso já é bom! Agora só falta entender seus números para melhorar ainda mais.</li>
                        <li class="dica-item dica-extra d-none mt-2"><i class="bi bi-check2-circle"></i> 16. Você está no caminho certo — só precisa de mais clareza.</li>
                        <li class="dica-item dica-extra d-none mt-2"><i class="bi bi-check2-circle"></i> 17. Tente inverter: guardar primeiro e gastar depois.</li>
                        <li class="dica-item dica-extra d-none mt-2"><i class="bi bi-check2-circle"></i> 18. Comece com valores pequenos; eles viram hábito.</li>
                        <li class="dica-item dica-extra d-none mt-2"><i class="bi bi-check2-circle"></i> 19. Antes de comprar, espere um dia — isso evita arrependimentos.</li>
                        <li class="dica-item dica-extra d-none mt-2"><i class="bi bi-check2-circle"></i> 20. Tente dividir o valor: uma parte para você, outra para segurança.</li>
                        <li class="dica-item dica-extra d-none mt-2"><i class="bi bi-check2-circle"></i> 21. Veja se realmente vale a pena entrar em parcelas agora.</li>
                        <li class="dica-item dica-extra d-none mt-2"><i class="bi bi-check2-circle"></i> 22. Às vezes, esperar um pouco te livra de dores de cabeça.</li>
                        <li class="dica-item dica-extra d-none mt-2"><i class="bi bi-check2-circle"></i> 23. Não tenha medo — olhar é o primeiro passo para melhorar.</li>
                        <li class="dica-item dica-extra d-none mt-2"><i class="bi bi-check2-circle"></i> 24. Encare aos poucos: veja só o saldo hoje, e pronto.</li>
                        <li class="dica-item dica-extra d-none mt-2"><i class="bi bi-check2-circle"></i> 25. Acompanhe o cartão no app — é rápido e te dá mais controle.</li>
                        <li class="dica-item dica-extra d-none mt-2"><i class="bi bi-check2-circle"></i> 26. Olhar sempre evita surpresas no fim do mês.</li>
                        <li class="dica-item dica-extra d-none mt-2"><i class="bi bi-check2-circle"></i> 27. O medo some quando você coloca o que tem e o que quer no papel. Comece hoje!</li>
                        <li class="dica-item dica-extra d-none mt-2"><i class="bi bi-check2-circle"></i> 28. Coloque o dinheiro do "sufoco" como sua prioridade número 1 de poupança.</li>
                        <li class="dica-item dica-extra d-none mt-2"><i class="bi bi-check2-circle"></i> 29. Anote apenas 3 gastos por dia em um papel por uma semana.</li>
                        <li class="dica-item dica-extra d-none mt-2"><i class="bi bi-check2-circle"></i> 30. Descubra exatamente de onde seu dinheiro vem e para onde ele vai.</li>
                        <li class="dica-item dica-extra d-none mt-2"><i class="bi bi-check2-circle"></i> 31. Monitore todos os seus gastos por uma semana.</li>
                        <li class="dica-item dica-extra d-none mt-2"><i class="bi bi-check2-circle"></i> 32. Tente renegociar seus 2 ou 3 maiores gastos fixos.</li>
                        <li class="dica-item dica-extra d-none mt-2"><i class="bi bi-check2-circle"></i> 33. Pague o limite totalmente e guarde o cartão para emergências.</li>
                        <li class="dica-item dica-extra d-none mt-2"><i class="bi bi-check2-circle"></i> 34. Marque duas sessões de 15 minutos por semana para olhar os números.</li>
                        <li class="dica-item dica-extra d-none mt-2"><i class="bi bi-check2-circle"></i> 35. Estipule um valor máximo mensal fixo para presentes e gentilezas.</li>
                        <li class="dica-item dica-extra d-none mt-2"><i class="bi bi-check2-circle"></i> 36. Antes de comprar algo não essencial, espere 24 horas.</li>
                        <li class="dica-item dica-extra d-none mt-2"><i class="bi bi-check2-circle"></i> 37. Quando sobrar, pense primeiro no que é prioridade.</li>

                    @elseif($perfil == 'Desligado')
                        <li class="dica-item"><i class="bi bi-lightbulb-fill text-warning"></i> 1. Não precisa ter medo — olhar é o primeiro passo para melhorar.</li>
                        <li class="dica-item dica-extra d-none mt-2"><i class="bi bi-check2-circle"></i> 2. Veja só um dado de cada vez; isso já ajuda a perder o medo.</li>
                        <li class="dica-item dica-extra d-none mt-2"><i class="bi bi-check2-circle"></i> 3. Tente acompanhar pelo celular — facilita muito.</li>
                        <li class="dica-item dica-extra d-none mt-2"><i class="bi bi-check2-circle"></i> 4. Ver aos poucos evita aquele susto no final.</li>
                        <li class="dica-item dica-extra d-none mt-2"><i class="bi bi-check2-circle"></i> 5. Começar cedo só te ajuda — mesmo com valores pequenos.</li>
                        <li class="dica-item dica-extra d-none mt-2"><i class="bi bi-check2-circle"></i> 6. Pensar agora evita preocupações lá na frente.</li>
                        <li class="dica-item dica-extra d-none mt-2"><i class="bi bi-check2-circle"></i> 7. Ter fé é ótimo, mas cuidar do hoje também faz parte.</li>
                        <li class="dica-item dica-extra d-none mt-2"><i class="bi bi-check2-circle"></i> 8. Deus ajuda, mas você também pode ajudar guardando um pouquinho.</li>
                        <li class="dica-item dica-extra d-none mt-2"><i class="bi bi-check2-circle"></i> 9. Na verdade, quanto antes, melhor — mesmo se for só pouquinho.</li>
                        <li class="dica-item dica-extra d-none mt-2"><i class="bi bi-check2-circle"></i> 10. Não precisa mudar tudo agora, só começar.</li>
                        <li class="dica-item dica-extra d-none mt-2"><i class="bi bi-check2-circle"></i> 11. Deus cuida, mas você pode ajudar se organizando um pouquinho.</li>
                        <li class="dica-item dica-extra d-none mt-2"><i class="bi bi-check2-circle"></i> 12. Muito bom! Continue assim, só não deixe escapar o controle.</li>
                        <li class="dica-item dica-extra d-none mt-2"><i class="bi bi-check2-circle"></i> 13. Aproveite o equilíbrio que você já tem e fortaleça ainda mais.</li>
                        <li class="dica-item dica-extra d-none mt-2"><i class="bi bi-check2-circle"></i> 14. Marquem um bate-papo calmo por mês para alinhar metas em conjunto.</li>
                        <li class="dica-item dica-extra d-none mt-2"><i class="bi bi-check2-circle"></i> 15. Crie lembretes no celular ou ative o débito automático.</li>
                        <li class="dica-item dica-extra d-none mt-2"><i class="bi bi-check2-circle"></i> 16. Comece pela única coisa mais importante: descubra quanto ganha.</li>
                        <li class="dica-item dica-extra d-none mt-2"><i class="bi bi-check2-circle"></i> 17. Foque em uma meta por vez em vez de tentar controlar tudo.</li>
                        <li class="dica-item dica-extra d-none mt-2"><i class="bi bi-check2-circle"></i> 18. Chute que 20% do que você ganha vai para a poupança.</li>
                        <li class="dica-item dica-extra d-none mt-2"><i class="bi bi-check2-circle"></i> 19. Assim que o dinheiro cair na conta, separe o valor da poupança.</li>
                        <li class="dica-item dica-extra d-none mt-2"><i class="bi bi-check2-circle"></i> 20. Use uma parte da grana extra para o luxo e invista a outra.</li>
                        <li class="dica-item dica-extra d-none mt-2"><i class="bi bi-check2-circle"></i> 21. Só parcele se o valor das parcelas couber facilmente no orçamento.</li>
                        <li class="dica-item dica-extra d-none mt-2"><i class="bi bi-check2-circle"></i> 22. Só pode gastar de novo depois de checar o saldo!</li>
                        <li class="dica-item dica-extra d-none mt-2"><i class="bi bi-check2-circle"></i> 23. Após cada compra no crédito, anote o valor para ter estimativa.</li>
                        <li class="dica-item dica-extra d-none mt-2"><i class="bi bi-check2-circle"></i> 24. Quanto mais cedo começa a guardar, menos esforço fará.</li>
                        <li class="dica-item dica-extra d-none mt-2"><i class="bi bi-check2-circle"></i> 25. O futuro será tranquilo se você fizer a sua parte com planejamento.</li>

                    @elseif($perfil == 'Financista')
                        <li class="dica-item"><i class="bi bi-lightbulb-fill text-warning"></i> 1. Você tem potencial para economizar mais — só falta foco.</li>
                        <li class="dica-item dica-extra d-none mt-2"><i class="bi bi-check2-circle"></i> 2. Analise onde dá para ajustar sem prejudicar seu dia a dia.</li>
                        <li class="dica-item dica-extra d-none mt-2"><i class="bi bi-check2-circle"></i> 3. Que tal assumir um pouco mais? Isso te dá independência.</li>
                        <li class="dica-item dica-extra d-none mt-2"><i class="bi bi-check2-circle"></i> 4. Participar das decisões pode te ajudar a aprender mais.</li>
                        <li class="dica-item dica-extra d-none mt-2"><i class="bi bi-check2-circle"></i> 5. Comece com metas simples e pequenas.</li>
                        <li class="dica-item dica-extra d-none mt-2"><i class="bi bi-check2-circle"></i> 6. Transforme uma meta grande em etapas menores.</li>
                        <li class="dica-item dica-extra d-none mt-2"><i class="bi bi-check2-circle"></i> 7. É bom ter autonomia, mas compartilhar decisões também ajuda.</li>
                        <li class="dica-item dica-extra d-none mt-2"><i class="bi bi-check2-circle"></i> 8. Conversar sobre finanças com alguém pode abrir seus horizontes.</li>
                        <li class="dica-item dica-extra d-none mt-2"><i class="bi bi-check2-circle"></i> 9. Aproveite essa qualidade para construir metas maiores.</li>
                        <li class="dica-item dica-extra d-none mt-2"><i class="bi bi-check2-circle"></i> 10. Sua organização é um grande diferencial — continue!</li>
                        <li class="dica-item dica-extra d-none mt-2"><i class="bi bi-check2-circle"></i> 11. Excelente equilíbrio! Continue assim.</li>
                        <li class="dica-item dica-extra d-none mt-2"><i class="bi bi-check2-circle"></i> 12. Isso mostra inteligência financeira — mantenha.</li>
                        <li class="dica-item dica-extra d-none mt-2"><i class="bi bi-check2-circle"></i> 13. Você se prepara muito bem — isso evita gastos desnecessários.</li>
                        <li class="dica-item dica-extra d-none mt-2"><i class="bi bi-check2-circle"></i> 14. Continue planejando; isso te mantém sempre no controle.</li>
                        <li class="dica-item dica-extra d-none mt-2"><i class="bi bi-check2-circle"></i> 15. Use esse conhecimento para ajudar mais pessoas.</li>
                        <li class="dica-item dica-extra d-none mt-2"><i class="bi bi-check2-circle"></i> 16. Continue estudando — o mercado sempre muda.</li>
                        <li class="dica-item dica-extra d-none mt-2"><i class="bi bi-check2-circle"></i> 17. Isso é raro e muito positivo!</li>
                        <li class="dica-item dica-extra d-none mt-2"><i class="bi bi-check2-circle"></i> 18. Continue concretizando suas metas assim.</li>
                        <li class="dica-item dica-extra d-none mt-2"><i class="bi bi-check2-circle"></i> 19. Aproveite essa habilidade para alcançar objetivos maiores.</li>
                        <li class="dica-item dica-extra d-none mt-2"><i class="bi bi-check2-circle"></i> 20. Você sabe investir bem — continue aprimorando.</li>
                        <li class="dica-item dica-extra d-none mt-2"><i class="bi bi-check2-circle"></i> 21. Use essa visão para crescer ainda mais financeiramente.</li>
                        <li class="dica-item dica-extra d-none mt-2"><i class="bi bi-check2-circle"></i> 22. Estratégia é seu ponto forte — explore isso.</li>
                        <li class="dica-item dica-extra d-none mt-2"><i class="bi bi-check2-circle"></i> 23. Suas decisões são bem pensadas — mantenha esse hábito.</li>
                        <li class="dica-item dica-extra d-none mt-2"><i class="bi bi-check2-circle"></i> 24. Continue agindo com calma e consciência.</li>
                        <li class="dica-item dica-extra d-none mt-2"><i class="bi bi-check2-circle"></i> 25. Conversas abertas em casa ajudam muito.</li>
                        <li class="dica-item dica-extra d-none mt-2"><i class="bi bi-check2-circle"></i> 26. Tente dividir responsabilidades para tudo ficar mais leve.</li>
                        <li class="dica-item dica-extra d-none mt-2"><i class="bi bi-check2-circle"></i> 27. Não ligue — isso mostra que você é detalhista.</li>
                        <li class="dica-item dica-extra d-none mt-2"><i class="bi bi-check2-circle"></i> 28. Só tente não exagerar para não gerar atritos.</li>
                        <li class="dica-item dica-extra d-none mt-2"><i class="bi bi-check2-circle"></i> 29. Tente ouvir mais — isso pode te ajudar a melhorar relações.</li>
                        <li class="dica-item dica-extra d-none mt-2"><i class="bi bi-check2-circle"></i> 30. Ser firme é bom, mas um pouco de flexibilidade faz a diferença!</li>
                        <li class="dica-item dica-extra d-none mt-2"><i class="bi bi-check2-circle"></i> 31. Use 70% da folga para quitar dívidas e 30% para se presentear.</li>
                        <li class="dica-item dica-extra d-none mt-2"><i class="bi bi-check2-circle"></i> 32. Defina um objetivo claro e monitore semanalmente.</li>
                        <li class="dica-item dica-extra d-none mt-2"><i class="bi bi-check2-circle"></i> 33. Reserve 1h/semana para revisar extratos e faturas.</li>
                        <li class="dica-item dica-extra d-none mt-2"><i class="bi bi-check2-circle"></i> 34. Defina um objetivo SMART (ex: Guardar R$ 500 em um mês).</li>
                        <li class="dica-item dica-extra d-none mt-2"><i class="bi bi-check2-circle"></i> 35. Transfira automaticamente seu investimento antes de tudo.</li>
                        <li class="dica-item dica-extra d-none mt-2"><i class="bi bi-check2-circle"></i> 36. Tenha 20% da sua renda como "verba livre".</li>
                        <li class="dica-item dica-extra d-none mt-2"><i class="bi bi-check2-circle"></i> 37. Agende uma Reunião Familiar Mensal para alinhar metas.</li>
                        <li class="dica-item dica-extra d-none mt-2"><i class="bi bi-check2-circle"></i> 38. Mantenha o controle e automatize ainda mais seus investimentos.</li>
                        <li class="dica-item dica-extra d-none mt-2"><i class="bi bi-check2-circle"></i> 39. Crie um cronograma de revisão trimestral para seus objetivos.</li>
                        <li class="dica-item dica-extra d-none mt-2"><i class="bi bi-check2-circle"></i> 40. Diversifique seu portfólio para áreas que ainda não domina.</li>
                        <li class="dica-item dica-extra d-none mt-2"><i class="bi bi-check2-circle"></i> 41. Use essa capacidade para ser um mentor financeiro.</li>
                        <li class="dica-item dica-extra d-none mt-2"><i class="bi bi-check2-circle"></i> 42. Avalie anualmente se a alocação de ativos está alinhada.</li>
                        <li class="dica-item dica-extra d-none mt-2"><i class="bi bi-check2-circle"></i> 43. Pense em como seu dinheiro pode patrocinar um novo negócio.</li>
                        <li class="dica-item dica-extra d-none mt-2"><i class="bi bi-check2-circle"></i> 44. Aplique a estratégia para compras caras (carro, casa).</li>
                        <li class="dica-item dica-extra d-none mt-2"><i class="bi bi-check2-circle"></i> 45. Crie um "Fundo Compartilhado" para despesas comuns.</li>
                        <li class="dica-item dica-extra d-none mt-2"><i class="bi bi-check2-circle"></i> 46. Separe uma pequena "Verba Flexível" para imprevistos menores.</li>
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
