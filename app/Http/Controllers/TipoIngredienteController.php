<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\{
    TipoIngrediente
};

class TipoIngredienteController extends Controller
{
    public function create()
    {
        return view('tipo_ingredientes.create');
    }

    public function store(Request $request)
    {
        $tipo = new TipoIngrediente();
        $tipo->nome = $request->nome;
        $tipo->save();
        return redirect()->route('tipo_ingredientes.create')->with('success', 'Tipo de ingrediente cadastrado com sucesso!');
    }
}
