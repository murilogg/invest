@extends('layouts.app')

@section('content')

 	<div class="row justify-content-center">
		<div class="container col-md-8 offset-md-2">
			 <div class="card border border-primary">
			 	<div class="card-header">
			 		<div class="card-title">
			 			<b>EMPRESAS</b>
			 		</div>
			 	</div>
			 	<div class="card-body">
			 		<form action="/index" method="POST">
								<div class="form-row">
								  <div class="form-group col-md-6">
									<label for="nome">Nome da Instituição</label>
									<input type="text" class="form-control" id="nome" placeholder="exe. BRADESCO">
								  </div>
								  <div class="form-group col-md-6">
									<label for="inputPassword4">Sigla</label>
									<input type="text" class="form-control" id="sigla" placeholder="exe. BRAP4.SA">
								  </div>
								</div>
								<div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputAddress">Taxa</label>
                                            <input type="number" class="form-control" id="taxa" placeholder="exe. 6.3">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputState">Categorias</label>
                                            <select id="inputState" class="form-control">
                                                <option selected>Tipo...</option>
                                                <option>...</option>
                                            </select>
                                        </div>
                                    </div>								
			 			<button type="submit" class="btn btn-primary btn-sm">Salvar</button>
			 			<button type="cancel" class="btn btn-danger btn-sm" href="/index">
                             Cancelar
                            </button>
			 		</form>
			 	</div>
			 </div>
		</div>
	</div>

@endsection