<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SiteController extends Controller
{
    
    public function index() {
        $title = 'Frete';
        return view('login.index', compact('title'));
    }

    public function login() {        
        return 'login ok';
    }
}