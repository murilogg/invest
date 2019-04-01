@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Consulta Empresas</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="panel-body">
                        {!! Form::open() !!}

                        {!! Form::close() !!}
                    </div>
                    este é o index
                </div>
            </div>
        </div>
    </div>
</div>

@endsection