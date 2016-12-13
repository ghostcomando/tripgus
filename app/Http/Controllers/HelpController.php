<?php

namespace Tripgus\Http\Controllers;

use Illuminate\Http\Request;
use Tripgus\Info;
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
        $infos = Info::where('helppage_id', '2')->get();
        return view('help.howDoesItwork', compact('infos'));
    }

    public function howToTravel()
    {
        $infos = Info::where('helppage_id', '3')->get();
        return view('help.howToTravel', compact('infos'));
    }

    public function howToBeAGuide()
    {
        $infos = Info::where('helppage_id', '4')->get();
        return view('help.howToBeAGuide', compact('infos'));
    }

    public function questions()
    {
        $infos = Info::where('helppage_id', '5')->get();
        return view('help.questions', compact('infos'));
    } 

   
}
