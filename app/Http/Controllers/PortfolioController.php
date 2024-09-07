<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function accueil(){
        return view('portfolio.accueil');
    }
    public function cv(){
        return view('portfolio.cv');
    }
    public function contact(){
        return view('portfolio.contact');
    }
    public function portfolio(){
        return view('portfolio.portfolio');
    }
    public function aPropos(){
        return view('portfolio.aPropos');
    }
}
