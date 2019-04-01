<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Conta;

class OperacoesBancariasControler extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('index');
    }

    public function cadastroEmpresa(){
        return view('cadastroEmpresa');
    }

    public function resgate(){
        return view('cadastroResgate');
    }

    public function investimento(){
        return view('cadastroInvestimento');
    }

    public function empresa(){
        return view('empresa');
    }

    public function transacoes(){
        return view('transacoes');
    }
}
