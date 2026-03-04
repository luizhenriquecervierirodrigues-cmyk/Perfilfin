<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resposta;

class RespostaController extends Controller
{
    public function store(Request $request, $etapa)
    {
        $inicio = ($etapa - 1) * 10 + 1; 
        $fim = $etapa * 10;              

        $rules = [];
        for ($i = $inicio; $i <= $fim; $i++) {
            $rules['q'.$i] = 'nullable|integer|min:1|max:5';
        }

        $validated = $request->validate($rules);

        $resposta = Resposta::create($validated);

        $proximaEtapa = $etapa + 1;
        if ($proximaEtapa <= 5) {
            return redirect()->route('etapas.show', $proximaEtapa);
        } else {
            return redirect()->route('resultado');
        }
    }

    public function show($id)
    {
        $resposta = Resposta::findOrFail($id);
        return view('resultado', compact('resposta'));
    }
}
