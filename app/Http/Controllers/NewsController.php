<?php

namespace App\Http\Controllers;

abstract class NewsController
{
    public function index() 
     {
        return view('home');
    }
}
