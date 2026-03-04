<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EtapaController extends Controller
{

    public function start(){
        return redirect()->route('start');
    }

    public function show($numero)
    {
        if ($numero < 1 || $numero > 5) {
            return redirect()->route('home');
        }

        $nome = session()->get('nome', 'Usuário');

        return view("etapas.etapa{$numero}", compact('nome'));
    }

    public function store(Request $request, $numero)
    {
        $respostas = session()->get('respostas', []);

        $inicio = ($numero - 1) * 10 + 1;
        $fim = $numero * 10;
               

        for ($i = $inicio; $i <= $fim; $i++) {
            $respostas["q$i"] = (int) $request->input("q$i", 0);
        }


        session()->put('respostas', $respostas);

        if ($numero < 5) {
            return redirect()->route('etapas.show', ['numero' => $numero + 1]);
        } else {
            return redirect()->route('resultado');
        }
    }

    public function resultado(Request $request)
    {
        $respostas = session()->get('respostas', []);
        for ($i = 1; $i <= 50; $i++) {
            $respostas["q$i"] = isset($respostas["q$i"]) ? (int)$respostas["q$i"] : 0;
        }

        $pontuacao1 = $respostas['q1'] + $respostas['q2'] + $respostas['q3'] + $respostas['q4'] + $respostas['q5'] + $respostas['q6'] + $respostas['q7'] + $respostas['q8'] + $respostas['q9'] + $respostas['q10'];
        $pontuacao2 = $respostas['q11'] + $respostas['q12'] + $respostas['q13'] + $respostas['q14'] + $respostas['q15'] + $respostas['q16'] + $respostas['q17'] + $respostas['q18'] + $respostas['q19'] + $respostas['q20'];
        $pontuacao3 = $respostas['q21'] + $respostas['q22'] + $respostas['q23'] + $respostas['q24'] + $respostas['q25'] + $respostas['q26'] + $respostas['q27'] + $respostas['q28'] + $respostas['q29'] + $respostas['q30'];
        $pontuacao4 = $respostas['q31'] + $respostas['q32'] + $respostas['q33'] + $respostas['q34'] + $respostas['q35'] + $respostas['q36'] + $respostas['q37'] + $respostas['q38'] + $respostas['q39'] + $respostas['q40'];
        $pontuacao5 = $respostas['q41'] + $respostas['q42'] + $respostas['q43'] + $respostas['q44'] + $respostas['q45'] + $respostas['q46'] + $respostas['q47'] + $respostas['q48'] + $respostas['q49'] + $respostas['q50'];

        $total = $pontuacao1 + $pontuacao2 + $pontuacao3 + $pontuacao4 + $pontuacao5;

        $pontuacoes = [
            'Poupador' => $pontuacao1,
            'Gastador' => $pontuacao2,
            'Equilibrado' => $pontuacao3,
            'Desligado' => $pontuacao4,
            'Financista' => $pontuacao5,
        ];

        $perfil = array_search(max($pontuacoes), $pontuacoes);

        switch ($perfil) {
            case 'Poupador':
                $fortes = 'Você tem disciplina para economizar e planejar.';
                $melhorar = 'Pode ser interessante aprender a investir melhor seu dinheiro.';
                break;
            case 'Gastador':
                $fortes = 'Você gosta de aproveitar a vida e consumir experiências.';
                $melhorar = 'Precisa melhorar seu controle financeiro para evitar dívidas.';
                break;
            case 'Equilibrado':
                $fortes = 'Você consegue balancear gastos e economia.';
                $melhorar = 'Ainda pode otimizar investimentos e reservas.';
                break;
            case 'Desligado':
                $fortes = 'Você não se estressa tanto com dinheiro.';
                $melhorar = 'Precisa ter mais atenção às finanças para evitar surpresas.';
                break;
            case 'Financista':
                $fortes = 'Você tem ótimo conhecimento financeiro e sabe investir.';
                $melhorar = 'Pode compartilhar seu conhecimento com outras pessoas.';
                break;
            default:
                $fortes = '---';
                $melhorar = '---';
                break;
        }

        return view('resultado', compact('perfil', 'fortes', 'melhorar'));
    }
}
