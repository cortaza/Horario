<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiginController extends Controller
{
    public function login(){                      
        return view('login');
    }
    public function signup(){                      
        return view('signup');
    }
}
