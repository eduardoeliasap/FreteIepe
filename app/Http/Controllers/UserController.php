<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;

class UserController extends Controller
{
    public function __construct(User $user) {
        $this->objUsuarios = $user;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request) {        
        //dd($prod);   // Retorna todo o registro encontrado na busca pelo campo id
        //dd($user); // Retorna apenas o name encontrado na busca pelo campo id
        //dd($request->all());  // Retorna todos os elementos do request

        //dd($request->input('email'));
        $title = "FreteIepê";
        $user = $this->objUsuarios->where('email', '=', $request->input('email'))
                                  ->where('password', '=', $request->input('password'))->first();
        if ($user) {            
            return view('site.principal', compact('title'));
        }
        else {            
            #return "Falha login!";
            return view('login.index', compact('title'));
        }            
    }    
    public function main() {
        $title = "FreteIepê";
        return view('site.principal', compact('title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {        
        return 'login ok';
    }    
}
