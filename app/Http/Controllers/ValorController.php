<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ValorController extends Controller
{
    public function index()
    {
        return view('valores.homeValores');
    }


}


