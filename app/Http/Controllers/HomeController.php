<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view('home');
    }
    public function btp(){
        return view('btp');
    }
    public function imprimerie(){
        return view('imprimerie');
    }
    public function constructionMetallique(){
        return view('construction-metallique');
    }
    public function entretienNettoyage(){
        return view('entretien-nettoyage');
    }
    public function gestionImmobiliere(){
        return view('gestion-immobiliere');
    }
}
