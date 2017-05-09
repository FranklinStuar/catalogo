<?php

namespace App\Http\Controllers;

use Auth;
use Session;

use Illuminate\Http\Request;

class LogController extends Controller
{
    public function login(){
    	return view('login');
    }

    public function store(Request $request){
    	if(Auth::attempt(['email' => $request['email'], 'password' => $request['password']]))
    		return redirect('/');
    	return redirect('/login');
    }

    public function logout(){
    	Auth::logout();
    	return redirect('/');

    }
}
