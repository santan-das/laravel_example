<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class UserAuth extends Controller
{
    //
    function userLogin(Request $request) {
    	$data = $request->input();
    	$request->session()->put('user', $data['user']);
    	$request->session()->forget('user');
    	// echo session('user');
    	return redirect('profile');
    }

    function savecookie(Request $request) {
    	$username = $request->input('username');
    	$password = $request->input('password');

    	$minute = 5;
    	$response = new Response('hello');
    	$response->withCookie(cookie('username', $username, $minute));
    	$response->withCookie(cookie('password', $password, $minute));
    	return $response;
    }

    function displayform() {
    	return view('cookie-form');

    }

    function getcookie(Request $request) {
    	$username = $request->cookie('username');

    	// echo $username;
    	$password = $request->cookie('password');

    	return view('cookie-form');

    }

}
