<?php if(Auth::user()===null){   die('Usuario não está logado.');   exit(0);}?>

@extends('vehicles.layout')
   
@section('content')

<script>
	function isNumber(evt)
	{
		var charCode = (evt.which) ? evt.which : event.keyCode
		if (charCode > 31 && (charCode < 48 || charCode > 57))
			return false;

		return true;
	}
</script>

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-right">
            <p>
				<a class="btn btn-primary" href="{{ route('vehicles.index') }}"> Voltar</a>
			</p>
        </div>	
        <div class="pull-left">
            <h5>
				<b>Editar dados do Veículo</b>
			</h5>
        </div>
    </div>
</div>
   
    @if ($errors->any())
        <div class="alert alert-danger">
			<strong>Aviso:</strong> Ocorreu um erro na entrada de dados.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  
    <form action="{{ route('vehicles.update',$vehicle->id) }}" method="POST">
        @csrf
        @method('PUT')
   
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12">
				<div class="form-group">
					<strong>Marca:</strong>
					<br/>
					<input value="{{ $vehicle->marca }}" id="marca" class="block mt-1 w-full" type="text" name="marca" required autofocus autocomplete="marca" placeholder="Marca do Veículo" />
				</div>
			</div>	
			<div class="col-xs-12 col-sm-12 col-md-12">
				<div class="form-group">
					<strong>Ano:</strong>
					<br/>
					<input value="{{ $vehicle->ano }}" id="ano" maxlength=4 minlength=2 onkeypress="return isNumber(event)" class="block mt-1 w-full" type="text" name="ano" required autofocus autocomplete="ano" placeholder="Ano do Veículo" style="max-width:200px;min-width:100px;width:130px;" />
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12">
				<div class="form-group">
					<strong>Modelo:</strong>
					<br/>				
					<input value="{{ $vehicle->modelo }}" id="modelo" maxlength=20 minlength=2 class="block mt-1 w-full" type="text" name="modelo" required autofocus autocomplete="modelo" placeholder="Modelo do Veículo"/>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12">
				<div class="form-group">
					<strong>Versão:</strong>
					<br/>				
					<input value="{{ $vehicle->versao }}" id="versao" maxlength=20 minlength=2 class="block mt-1 w-full" type="text" name="versao" required autofocus autocomplete="versao" placeholder="Versao do Veículo"/>
				</div>
			</div>		
			<div class="col-xs-12 col-sm-12 col-md-12 text-center">
				&nbsp;<br>
				<p>
					<button type="submit" class="btn btn-primary">Atualizar</button>
				</p>
			</div>
		</div>
   
    </form>
@endsection