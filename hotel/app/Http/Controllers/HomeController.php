<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Guests;
use App\Models\Countries;
use App\Models\Cities;
use App\Models\States;

class HomeController extends Controller
{
	
	protected $guests_repo;
	
	public function __construct() {
		$this->middleware('guest');
		
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
    	// Countries
    	$countries = Countries::all();
    	
    	// Cities
    	$cities = Cities::all();
    	
    	// States
    	$states = States::all();
    	
        // Retornar la vista home
        return view('home', compact('guests', 'countries', 'cities', 'states'));
        
    }
    
}