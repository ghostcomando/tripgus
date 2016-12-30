<?php

namespace Tripgus\Http\Controllers;

use Illuminate\Http\Request;
use Tripgus\Country;
use Tripgus\State;
use Tripgus\City;
use Tripgus\Http\Requests;
use Tripgus\Http\Controllers\Controller;
use Input;
use Response;

class TouristicPlanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {        
        return view('myPlans/index');
    }

    public function states()
    {
        $pais_id = Input::get('pais_id');
        $states = State::where('country_id', '=', $pais_id)->get();

        return Response::json([$states]);
    }

    public function cities()
    {
        $state_id = Input::get('estado_id');
        $cities = City::where('state_id', '=', $state_id)->get();

        return Response::json([$cities]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $States = country::find(1)->States;
        $Pais = Country::lists('country','id');
        return view('myPlans/create', compact('Pais', 'States'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('myPlans/edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
