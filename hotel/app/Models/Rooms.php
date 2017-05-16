<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rooms extends Model
{
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'rooms';
	
	public function getRooms() {
		$resultado = Rooms::all();
		
		return $resultado;
	}
}
