<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{
    public function loginIndex(){

        return view('Frontend.login');
    }

}
