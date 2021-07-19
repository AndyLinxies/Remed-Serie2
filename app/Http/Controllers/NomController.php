<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NomController extends Controller
{
    public function index(){
        return view('pages.nom');
    }
}
