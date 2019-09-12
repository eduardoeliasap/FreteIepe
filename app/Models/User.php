<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    // A model representa a tabela users
    protected $table = 'users';
    protected $primaryKey = 'id';

    // Indica quais campos o usuário podem iserir pelo formulario 
    protected $fillable =[
        'name' , 'email', 'password'
    ];
}
