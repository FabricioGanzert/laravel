@extends('vehicles.layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-right">
            <p>
				<a class="btn btn-primary" href="{{ route('vehicles.index') }}" style="display:inline;"> Voltar</a>
			</p>
        </div>	
        <div class="pull-left">
            <h5>
				<b>Agendar Manutenção para o Veículo</b>
			</h5>
        </div>
    </div>
</div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Marca:</strong>
                {{ $vehicle->marca }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Ano:</strong>
                {{ $vehicle->ano }}
            </div>
        </div>		
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Modelo:</strong>
                {{ $vehicle->modelo }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Versão:</strong>
                {{ $vehicle->versao }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
				<input type="text" id="dtc" name="dtc" value="" readonly onclick="javascript: calendarInit();" placeholder="dd/mm/AAAA" />		
				<div id="myCalendarWrapper" style="max-width:300px;position:absolute;background-color:white;padding:4px;display:none;"></div>
				<a href="javascript:void(0);" onclick="javascript: calendarInit();">
					<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6" style="display:inline;width:20px;">
						<path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
					</svg>
				</a>
				&nbsp;&nbsp;<a class="btn btn-info" href="javascript:void(0);" onclick="agendaManutencao();">Agendar</a>
			</div>
        </div>
		
    </div>

	<form id="frm1" action="{{ route('maintenances.store') }}" method="POST">
	@csrf 
		<input type="hidden" id="vehicle_id" name="vehicle_id" value="" />
		<input type="hidden" id="datemaintenance" name="datemaintenance" value="" />	
	</form>	

<script>
	var agendaManutencao=()=>{
	var dtc = document.getElementById("dtc");
		if(dtc.value=="")
		{
			alert("Selecione uma data para manutenção!");
			return false;
		}
		var dtref = dtc.value;
		dtrefArr = dtref.split("/");
		var dataFormatadaUS = dtrefArr[2] + "-" + dtrefArr[1] + "-" + dtrefArr[0] + " 00:00:00";
		//let's submit the data to the server
		var form = document.getElementById("frm1");
		document.getElementById("vehicle_id").value = "{{ $vehicle->id }}";
		document.getElementById("datemaintenance").value = dataFormatadaUS;		
		form.submit();
	};

	//The code above was taken and adapted from the internet
	function calendarInit(){
	var mcw = document.getElementById('myCalendarWrapper');
		mcw.innerHTML = "";	
		setTimeout(()=>{
			mcw.style.display = "block";
			const nextYear = new Date().getFullYear() + 1;
			const myCalender = new CalendarPicker('#myCalendarWrapper', {
				  min: new Date(),
				  max: new Date(nextYear, 10) 
			});
		},5);
	}
</script>	
	
@endsection