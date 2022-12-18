<?php if(Auth::user()===null){   die('Usuario não está logado.');   exit(0);}?>

@extends('vehicles.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h4>
					<small>
						<a title="Voltar" href="dashboard" class="btn btn-primary">Voltar</a> <a class="btn btn-info" href="{{ route('maintenances.index') }}" style="display:inline;"> Histórico de Manutenções</a>
					</small>
				</h4>
            </div>
            <div class="pull-right">
				<p>
					<b>Listagem de veículos do usuario {{ Auth::user()->name }}</b>
				</p>
				<p>
					<a class="btn btn-success" href="{{ route('vehicles.create') }}"> Cadastrar Novo Veiculo</a>
				</p>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
	
    <table class="table table-bordered">
        <tr>
            <th>#</th>
            <th>Marca</th>
            <th>Ano</th>
            <th>Modelo</th>
            <th>Versao</th>			
            <th width="280px">&nbsp;</th>
        </tr>
		@foreach ($vehicles->sortBy('updated_at') as $vehicle)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $vehicle->marca }}</td>
            <td>{{ $vehicle->ano }}</td>
            <td>{{ $vehicle->modelo }}</td>
            <td>{{ $vehicle->versao }}</td>			
            <td>
                <form action="{{ route('vehicles.destroy',$vehicle->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('vehicles.show',$vehicle->id) }}">Agendar</a>
    
                    <a class="btn btn-primary" href="{{ route('vehicles.edit',$vehicle->id) }}">Editar</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Remover</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $vehicles->links() !!}
      
@endsection