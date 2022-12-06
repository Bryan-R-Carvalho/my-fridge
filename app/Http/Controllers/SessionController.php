<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SessionController extends Controller
{
//    public function session(){
//         session(['name' => 'John']);
//         session()->put('lastname', 'Doe');
//         Session::put('age', 30);
//         Session::put(['ingrediente' => 'ovo', 'tipo' => 'ovo de galinha']);
//         var_dump(Session::all());
//    }
    public function setSession(Request $request){
        $request->session()->put('ingrediente', 'ovo');
        var_dump($request->session()->all());
    }
    public function getSession(Request $request){
        $value = $request->session()->get('ingrediente');
        if ($request->session()->has('ingrediente')) {
            echo "Session has been set";
        } else {
            echo "Session has not been set";
        }
        var_dump($value);
    }
}