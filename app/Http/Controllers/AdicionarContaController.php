<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdicionarContaController extends Controller
{
    public function index()
    {
        return view('contas.novaConta');
    }


}


