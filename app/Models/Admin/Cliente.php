<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    // A model representa a tabela clientes
    protected $table = 'clientes';
    protected $primaryKey = 'Cli_Codigo';

    // Indica quais campos o usuário podem iserir pelo formulario 
    protected $fillable =[ 
        'Cli_Codigo', 'Cli_Nome', 'Cli_Endereco', 'Cli_Numero', 'Cli_Complemento', 'Cli_Referencia', 'Cli_DtNasc',
        'Cli_Status', 'Cli_Email', 'Cli_Telefone01', 'Cli_Telefone02', 'created_at', 'updated_at',
    ];

    // Regras de validação
    public $rules = [
        'Cli_Nome' => 'required|min:3',
        'Cli_Endereco' => 'required|min:10',
        'Cli_Numero' => 'required|min:2'
    ];
}
