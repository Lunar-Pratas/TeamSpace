<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestConroller extends Controller
{
    public function test(){
        return view("test");
    }
}
