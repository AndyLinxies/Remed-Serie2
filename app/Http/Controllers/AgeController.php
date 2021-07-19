<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgeController extends Controller
{
    public function age(){
        return view('pages.age');
    }
}
