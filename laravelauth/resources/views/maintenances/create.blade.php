<?php if(Auth::user()===null){   die('Usuario não está logado.');   exit(0);}?>

@extends('maintenances.layout')
 
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-right">
            <p>
				<a class="btn btn-primary" href="../dashboard" style="display:inline;"> Voltar</a>
			</p>
        </div>	
        <div class="pull-left">
            <h5>
				<b>Manutenção agendada com sucesso!</b>
				<br>
				Clique em 'Voltar' para retornar ao painel principal.
			</h5>
        </div>
    </div>
</div>
@endsection