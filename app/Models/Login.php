<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Login extends Model
{
    // A model representa a tabela Products
    protected $table = 'users';

    // Indica quais campos o usuário podem iserir pelo formulario 
    protected $fillable =[
        'name' , 'number', 'active', 'category' => 'limpeza', 'description'
    ];
}
