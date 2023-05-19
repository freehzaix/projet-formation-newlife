<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //Afficher l'interface d'inscription
    public function form_register(){
        return view('auth.register');
    }
}
