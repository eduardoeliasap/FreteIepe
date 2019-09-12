<?php

namespace App\Http\Controllers\Cadastros;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\Cliente;

class ClienteController extends Controller
{
    public function __construct(Cliente $cliente) {
        $this->objClientes = $cliente; // Cria o objeto associado ao Model
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request) {        
        return view('site.Cad-Clientes');
    }

    public function store(Request $request) { // Retorna os dados repassados pela view
        $cliente = $this->objClientes;        

        // Validar dados
        //$this->validate($request, $cliente->rules);

        /*********************************** */
        /*** Opção para registro no banco ** */
        /*$cliente->Cli_Nome = $request->input('txtNome');
        $cliente->Cli_Endereco = $request->input('txtEndereco');
        // o comando save grava no banco de dados o que esta na variavel prod... Retorna true caso foi gravado com sucesso
        if ($cliente->Cli_Nome != "") {
            $CadOk = $cliente->save(); 
            if ($CadOk)
                return redirect()->back()->with('alert', 'Dados confirmados com sucesso!!'); // Chama o alerte que esta na view 
            else
                return "Falha no cadastro de produtos";
        }
        else
            return redirect()->back(); // Chama o alerte que esta na view  */
        /************************************ */

        $insert = $this->objClientes->create([            
            'Cli_Nome' => $request->input('txtNome'),
            'Cli_Endereco' => $request->input('txtEndereco'),
        ]);

        if($insert) {
            $id = $insert->Cli_Codigo; // Retorna o último ID inserido no banco
            return redirect()->back()->with('alert', "Dados confirmados com sucesso, ID: {$id}!!"); // Chama o alert que esta na view 
        }            
        else
            return "Falha no cadastro de clientes";
    }

    public function research(Cliente $cliente) { // Neste caso não preciso passar Cliente por parâmetro pois não estou usando a variavel $cliente        
        return view('site.Con-Clientes', compact('clientes'));
    }    
    
    public function return(Cliente $cliente, Request $request) {              
        $cliente = Cliente::where('Cli_Nome', '=', $request->input('txtNome'))->select('Cli_Codigo', 'Cli_Nome', 'Cli_Endereco')->get();
        //$clientes = $this->objClientes->find(1); // Busca pela chave prímária
        //dd($cliente);

        return view('site.Sho-Clientes');
    }
}