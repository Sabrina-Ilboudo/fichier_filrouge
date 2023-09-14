<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('index');
    }

    
    public function boutique()
    {
        return view('boutique');
    }

    public function sacs()
    {
        return view('sacs');
    }

    public function pagnes()
    {
        return view('pagnes');
    }

    public function chaussure()
    {
        return view('chaussure');
    }

    public function ensemble()
    {
        return view('ensemble');
    }

    public function ensemble1()
    {
        return view('ensemble1');
    }

    public function ensemble2()
    {
        return view('ensemble2');
    }

    public function ensemble3()
    {
        return view('ensemble3');
    }

    public function ensemble4()
    {
        return view('ensemble4');
    }

    public function portfolio()
    {
        return view('portfolio');
    }

    public function contacts()
    {

        return view('contacts');
    }

    public function formulaire()
    {
        return view('formulaire');
    }
    
    public function sinscrire()
    {
        return view('sinscrire');
    }


    public function connexion()
    {
        return view('connexion');
    }

}

