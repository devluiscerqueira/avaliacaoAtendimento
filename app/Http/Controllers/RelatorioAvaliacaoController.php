<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Avaliacao;
use App\Models\Vendedor;

class RelatorioAvaliacaoController extends Controller
{
    
        public function index()
    {


        // Obtenha a média das notas para cada vendedor

            $vendedores = \App\Models\Vendedor::with('avaliacoes')
            ->withAvg('avaliacoes', 'nota')
            ->orderByDesc('avaliacoes_avg_nota')
            ->get();


        // Obtenha todas as opiniões independentemente do vendedor

        $opinions = \App\Models\Avaliacao::select('opiniao', 'created_at')
            ->orderBy('created_at', 'desc')
            ->get();


        return view('relatorio.index', compact('vendedores', 'opinions'),  [
            'title' => 'Pesquisa de satisfação'
        ]);
    }

}

