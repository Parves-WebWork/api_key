<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $token = $request->query('token');

        // Use the token to authenticate the user if needed

        // Your other dashboard logic here
        
        return view('dashboard');
    }
}
