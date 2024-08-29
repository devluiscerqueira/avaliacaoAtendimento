<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vendedor;
use App\Models\Avaliacao;

class AvaliacaoController extends Controller
{



    public function create()
    {
        $vendedores = Vendedor::all();
        return view('template/form', compact('vendedores'), [
            'title' => 'Pesquisa de satisfação'
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'idVendedor' => 'required|exists:vendedores,id',
            'nota' => 'required|integer|min:0|max:10',
            'opiniao' => 'nullable|string',
        ]);

        Avaliacao::create($validated);

        return redirect()->route('agradecimento');
    }

}

