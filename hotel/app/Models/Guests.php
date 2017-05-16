<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Guests extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'guests';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['dni', 'name', 'last_name', 'email', 'occupation', 'gender', 'type', 'type_id', 'date_of_birth', 'city_id'];
    
    public function getGuestsxDNI($dni) {
    	$resultado = Guests::where('dni', '=', $dni)->get();
    	
    	return $resultado;
    }
}
