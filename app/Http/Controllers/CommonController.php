<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;

class CommonController extends Controller
{
    //

    function index() {
    	$data = Country::join('state', 'state.country_id', '=', 'country.country_id')
              		->join('city', 'city.state_id', '=', 'state.state_id')
              		->get(['country.country_name', 'state.state_name', 'city.city_name']);


        return view('listview', compact('data'));

    }

    function test() {
    	
    }
    
}

//  beta testing code
//main branch code
