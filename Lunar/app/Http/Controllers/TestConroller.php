<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;

class welcomeController extends Controller
{
    public function welcome(){
        return view('welcome');
    }
}
