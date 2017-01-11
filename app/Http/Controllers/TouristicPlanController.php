<?php

namespace Tripgus\Http\Controllers;

use Illuminate\Http\Request;
use Tripgus\Country;
use Tripgus\State;
use Tripgus\City;
use Tripgus\TouristicPlan;
use Tripgus\Http\Requests;
use Tripgus\Http\Controllers\Controller;
use Input;
use Response;
use Session;
use Redirect;
use Auth;

class TouristicPlanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   $plans = TouristicPlan::where('user_id', Auth::User()->id)->paginate(5);
        return view('myPlans/index', compact('plans'));
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
        return view('Myplans/create', compact('Pais', 'States'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        TouristicPlan::create($request->all());
        Session::flash('message', 'Se ha registrado correctamente');
        return redirect('Myplans/create');
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
        $States = country::find(1)->States;
        $Pais = Country::lists('country','id');
        $Plan = TouristicPlan::find($id);
        return view('Myplans.edit', ['plan'=>$Plan], compact('Pais', 'States'));
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
        $Plan = TouristicPlan::find($id);
        $Plan->fill($request->all());
        $Plan->save();
        Session::flash('message', 'usuario modificado correctamente');
        return Redirect::to('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        TouristicPlan::destroy($id);
        Session::flash('message', 'usuario eliminado correctamente');
        return Redirect::to('/Myplans');
    }
}
