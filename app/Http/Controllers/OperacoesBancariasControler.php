<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Conta;

class OperacoesBancariasControler extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function abrirConta($abrirConta) 
    {
        $abrirConta = Conta();
        $abrirConta->status = true;
        $abrirConta->save();
        return view('abrirConta');
    }

    public function fecharConta() 
    {
        echo "conta fechada";
    }

    public function depositarConta() 
    {
        
    }

    public function sacarConta() 
    {
        
    }

    public function pagarMensalConta() 
    {
        
    }
}
