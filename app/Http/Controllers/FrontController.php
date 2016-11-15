<?php namespace Tripgus\Http\Controllers;

use Tripgus\Http\Requests;
use Tripgus\Http\Controllers\Controller;

use Illuminate\Http\Request;

class FrontController extends Controller {

	public function index()
	{
		return view('front.index');
	}
}






