<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Guests;

class HuespedController extends Controller
{
	protected $guests_repo;
	
	public function __construct() {
		// Guests
		$this->guests_repo = new Guests();
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
	public function create(Request $request, $dni) {
    	
    	// Consultar Invitados por DNI
   		$guests = $this->guests_repo->getGuestsxDNI($dni);
   		return $guests;
    		
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    	// Consultar Invitados por DNI
    	$busqueda_guests = $this->guests_repo->getGuestsxDNI($request->dni)->count();
    	
    	if ($busqueda_guests > 0) {
    		// Mensaje
    		\Session::flash('flash_errors', "Ya existen registros relacionados con los datos previamente cargados. Intentelo nuevamente.");
    		return redirect()->back();
    	}
    	
    	$guests = new Guests();
    	$guests->create($request->all());
    	
    	// Mensaje
    	return redirect("reservas/$request->dni");
    	
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
