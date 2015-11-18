<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class WelcomeController extends Controller
{
    //metodo index
	public function index_en(){
		$name = 'Little';
		$surname= 'Noah';
		return view('welcome.welcome')->with(['name'=>$name, 'surname'=>$surname]);
	}
	
	public function index_it(){
		$name = 'Little';
		$surname= 'Noah';
		return view('welcome.benvenuto')->with(['name'=>$name, 'surname'=>$surname]);
	}
}
