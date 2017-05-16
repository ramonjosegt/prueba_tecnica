<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Guests;
use App\Models\Countries;
use App\Models\Cities;
use App\Models\States;
use App\Models\ReservationRooms;
use App\Models\Rooms;

class ReservasController extends Controller
{
	
	protected $guests_repo;
	protected $reservations_rooms_repo;
	protected $rooms_repo;
	
	public function __construct() {
		// Guests
		$this->guests_repo = new Guests();
		
		// Reservacion de Habitaciones
		$this->reservations_rooms_repo = new ReservationRooms();
		
		// Habitaciones
		$this->rooms_repo = new Rooms();
	}
	
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($dni)
    {
    	// Consultar Invitados por DNI
    	$guests = $this->guests_repo->getGuestsxDNI($dni);
    	
    	foreach ($guests as $guest);
    	
    	// Countries
    	$countries = Countries::all();
    	 
    	// Cities
    	$cities = Cities::all();
    	 
    	// States
    	$states = States::all();
    	 
    	// Retornar la vista home
    	return view('reservas/home', compact('guest', 'countries', 'cities', 'states'));
    }
    
    public function getRooms(Request $request)
    {
    	if ($request->ajax()){
    		$rooms_disponibles = $this->reservations_rooms_repo->getReservationsRooms($request);
    		
    		if ($rooms_disponibles == 0) {
    			$rooms = $this->rooms_repo->getRooms()->toArray();
    			return response()->json([
    				'rooms'	=> $rooms
    			]);
    		}
    		
    		return response()->json($rooms_disponibles);
    	}
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
