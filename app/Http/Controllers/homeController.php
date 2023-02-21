<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    //fontion de la vue du home
    public function home(){
        return view('welcome');
    }
}
