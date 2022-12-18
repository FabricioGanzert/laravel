<?php
   
namespace App\Http\Controllers\API;
   
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\User;
use App\Models\Maintenance;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Validator;
   
class RegisterController extends BaseController
{
    /**
     * Register api
     *
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'c_password' => 'required|same:password',
        ]);
   
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }
   
        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $user = User::create($input);
        $success['token'] =  $user->createToken('MyApp')->plainTextToken;
        $success['name'] =  $user->name;
   
        return $this->sendResponse($success, 'User register successfully.');
    }
   
    /**
     * Login api
     *
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password]))
		{
            $user = Auth::user(); 
            $success['token'] =  $user->createToken('MyApp')->plainTextToken; 
            $success['name'] =  $user->name;
   
            return $this->sendResponse($success, 'User login successfully.');
        } 
        else
		{			
            return $this->sendError('Unauthorised.', ['error'=>'Unauthorised']);
        } 
    }
	
    /**
     * Maintenance api
     *
     * @return \Illuminate\Http\Response
     */
    public function maintenance($user_id)
    {	
		$date=date_create(date('Y-m-d'));
		date_add($date,date_interval_create_from_date_string("7 days"));
		$date=date_format($date,"Y-m-d");	
		$resultset = DB::table('maintenances')
		->join('vehicles', 'maintenances.vehicle_id', '=', 'vehicles.id')
		->where('vehicles.user_id', '=', $user_id)
		->where('maintenances.flagmaintenance', '=', '1')
		->whereDate('maintenances.datemaintenance', '<=', $date)
		->orderBy('maintenances.datemaintenance')->get();
		
		$Response = array('success' => '0', 'data' => $resultset);
		return json_encode($Response);
    }
	
}