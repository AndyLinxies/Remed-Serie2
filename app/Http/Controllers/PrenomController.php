<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrenomController extends Controller
{
    public function prenom(){
        return view('pages.prenom');
    }
}
