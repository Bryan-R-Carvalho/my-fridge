<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{
    Ingrediente,
    TipoIngrediente
};

class IngredienteController extends Controller
{
    public function index()
    {
        $ingredientes = Ingrediente::all();
        $tipo = TipoIngrediente::all();
        return view('home', compact('ingredientes', 'tipo'));
    }

    public function create()
    {
        $tipos = TipoIngrediente::all();
        return view('ingredientes.create', compact('tipos'));
    }
    public function store(Request $request)
    {
        $ingrediente = new Ingrediente();
        $ingrediente->nome = $request->nome;
        $ingrediente->tipo_ingrediente = $request->tipo;
        $ingrediente->save();
        return redirect()->route('ingredientes.create')->with('success', 'Ingrediente cadastrado com sucesso!');
    }

    public function storeSession(Request $request)
    {
        $request->session()->put('ingredientes', $request->nome);
        return redirect()->route('ingredientes.create')->with('success', 'Ingrediente adicionado com sucesso!');
    }


}