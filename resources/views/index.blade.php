@extends('layouts.app')

@section('content')

<div class="jumbotron bg-white border border-white">
        <div class="card-deck">
            <div class="card border border-primary">
                <div class="card-body">
                    <h5 class="card-title">Cadastro de Empresas</h5>
                    <p class="card=text">
                        Aqui você cadastra suas empresas.
                    </p>
                    <a href="/empresa/novo" class="btn btn-primary">Cadastro</a>
                </div>
            </div>
            <div class="card border border-primary">
                <div class="card-body">
                    <h5 class="card-title">Fazer Transações</h5>
                    <p class="card=text">
                        Aqui você realiza o investimento ou resgate,<br>
                        Lembre-se de primeiro cadastrar as empresas.
                    </p>
                    <a href="/investimento/novo" class="btn btn-primary">Investimento</a>
                    <a href="/resgate/novo" class="btn btn-primary">Resgate</a>
                </div>
            </div>            
        </div>
</div>

@endsection