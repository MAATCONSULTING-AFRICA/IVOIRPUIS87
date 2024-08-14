<?php

namespace App\Http\Controllers;

use App\Models\Service;
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

    public function serviceDetail($id){
        $service = getServiceById($id);
        $services = Service::get();
        $pagetitle = 'Détail ' .$service->name;
        return view('service_detail',[
            'service' => $service,
            'allservices' => $services,
            'pagetitle' => $pagetitle,
        ]);
    }
}
