<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReservationRooms extends Model
{
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'reservation_rooms';
	
	public function getReservationsRooms($parametros) {
		
		$resultados = ReservationRooms::join('reservations', 'reservation_rooms.reservation_id', '=', 'reservations.id')
		->join('rooms', 'reservation_rooms.room_id', '=', 'rooms.id')
		->where('reservations.checkin_date', '<=', $parametros->checkin_date)
		->orWhere('reservations.checkout_date', '>=', $parametros->checkin_date)
		->count();
		
		return $resultados;
	}
}
