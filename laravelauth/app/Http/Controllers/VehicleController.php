<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$idusr = Auth::id();
        $vehicles = Vehicle::where('user_id', $idusr)->latest()->paginate(5);
        return view('vehicles.index',compact('vehicles'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vehicles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
		// Get the currently authenticated user's ID
		$idusr = Auth::id();		
		//merge the user_id in the request
		$request = $request->merge(['user_id' => $idusr]);
		$request->validate([	  
			'marca' => 'required',
			'ano' => 'required|numeric',		
			'modelo' => 'required',
			'versao' => 'required',
		]);	  

        Vehicle::create($request->all());       
        return redirect()->route('vehicles.index')
                        ->with('success','Veiculo cadastrado com sucesso.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function show(Vehicle $vehicle)
    {
		$res = DB::table('maintenances')
		->where('vehicle_id', $vehicle->id)
		->where('flagmaintenance', '=', '1')->first();
		if($res)
		{
			$array_ = json_decode(json_encode($res), true);
			//Veiculo já tem manutençao programada, não deixa gravar outra
			if($res->flagmaintenance && (int)$res->flagmaintenance==1)
			{
				die("<h3>Veiculo possui registro de agendamento em outra data. Cancele a anterior antes de gravar um novo agendamento.</h3>");
			}
				
		}
		
        return view('vehicles.show',compact('vehicle'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function edit(Vehicle $vehicle)
    {
		return view('vehicles.edit',compact('vehicle'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vehicle $vehicle)
    {
		$request->validate([	  
			'marca' => 'required',
			'ano' => 'required',		
			'modelo' => 'required',
			'versao' => 'required',
		]);	
	  
        $vehicle->update($request->all());      
        return redirect()->route('vehicles.index')->with('success','Atualização OK');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vehicle $vehicle)
    {
        $vehicle->delete();
       
        return redirect()->route('vehicles.index')
                        ->with('success','Veiculo removido com sucesso');
    }
}
