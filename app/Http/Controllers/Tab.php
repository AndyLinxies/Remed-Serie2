<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Tab extends Controller
{
    public function tableau(){
        $outils=['crayon','gomme','bic','équaire'];
        return view('pages.table',compact('outils'));
    }
}
