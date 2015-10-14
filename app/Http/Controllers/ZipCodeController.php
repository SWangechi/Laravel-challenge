<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;


class ZipCodeController extends controller
{
	
	function index()
	{

		$ZipCode=\App\ZipCode::all();
		return view('zip_codes',['zip_codes'=>$ZipCode]);
	}
}
