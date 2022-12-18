<?php if(Auth::user()===null){   die('Usuario não está logado.');   exit(0);}?>

@extends('maintenances.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h4><small><a title="Voltar" href="{{ route('vehicles.index') }}" class="btn btn-primary">Voltar</a></small></h4>
            </div>
            <div class="pull-right">
				<p>
					<b>Listagem de manutenções agendadas para o usuario {{ Auth::user()->name }}</b>
				</p>
				<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6" style="width:20px;color:red;display:inline;">
					<path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
				</svg> Pendente
				&nbsp;
				<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6" style="width:20px;color:orange;display:inline;">
					<path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
				</svg>	Em atraso
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
            <th>Veiculo</th>
            <th>Status</th>			
            <th>Data Manutenção</th>
        </tr>
		@foreach ($maintenances->sortBy('datemaintenance') as $maintenance)
        <tr>
            <td>{{ $maintenance->marca.' '.$maintenance->modelo.' '.$maintenance->ano }}</td>
			@if ($maintenance->flagmaintenance=='0')
				<td align="center">
					<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6" style="width:20px;color:green;">
					  <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
					</svg>
				</td>
			@else 
				@if( strtotime($maintenance->datemaintenance) <= strtotime(date('Y-m-d H:i:s')) )
					<td align="center">					
						<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6" style="width:20px;color:red;">
							<path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
						</svg>			
					</td>						
				@else		
					<td align="center">					
						<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6" style="width:20px;color:orange;">
							<path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
						</svg>				
					</td>
				@endif
			@endif
            <td align="center">
				{{ date('d/m/Y', strtotime($maintenance->datemaintenance)) }}
			</td>			
        </tr>
        @endforeach
    </table>
  
    {!! $maintenances->links() !!}
      
@endsection