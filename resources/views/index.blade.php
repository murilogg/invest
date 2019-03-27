@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="card-body">
            <div class="card">
                <button class="card-header">
                    <a href="{{ url('/abrirconta') }}">Abrir Conta</a>
                </button>
            </div>
        </div>
    </div>
</div>
@endsection



