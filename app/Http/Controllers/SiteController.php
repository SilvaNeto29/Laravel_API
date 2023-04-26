<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {


        return \view('bemvindo',[
            'nome'=>'Fulano',
            'idade'=>10
        ]);
    }

    public function exit()
    {
        return \view('sair');
    }
}
