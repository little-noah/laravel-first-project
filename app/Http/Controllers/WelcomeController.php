<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class WelcomeController extends Controller
{
    //metodo index
	public function index(){
		$name = 'Fabio';
		return view('welcome.hello')->with('name',$name);
	}
}
