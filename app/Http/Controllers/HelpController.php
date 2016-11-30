<?php

namespace Tripgus\Http\Controllers;

use Illuminate\Http\Request;

use Tripgus\Http\Requests;
use Tripgus\Http\Controllers\Controller;

class HelpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('help.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function howDoesItwork()
    {
        return view('help.howDoesItwork');
    }

    public function howToTravel()
    {
        return view('help.howToTravel');
    }

    public function howToBeAGuide()
    {
        return view('help.howToBeAGuide');
    }

    public function questions()
    {
        return view('help.questions');
    } 

   
}
