<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function homeView()
    {

        return view('home');

    }

    public function loginView()
    {

        return view('auth.login');

    }

    public function registerView()
    {

        return view('auth.register');

    }

    public function checkView($contractSerial)
    {

        return view('contracts.check');

    }
    
}
