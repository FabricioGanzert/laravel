<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Maintenance extends Model
{
    use HasFactory;
	
	protected $fillable = [
		'id', 'vehicle_id', 'flagmaintenance', 'datemaintenance', 'created_at', 'updated_at', 'deleted_at'
    ];	
}
