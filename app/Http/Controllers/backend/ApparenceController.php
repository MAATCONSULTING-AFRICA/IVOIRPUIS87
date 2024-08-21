<?php

namespace App\Http\Controllers\backend;

use App\Models\Apparence;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApparenceController extends Controller
{
    public function index(){
        $apparence = Apparence::all();
        return view("backend.apparence.index",compact("apparence"));
    }
}
