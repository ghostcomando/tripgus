<?php

namespace Tripgus\Http\Controllers;

use Illuminate\Http\Request;

use Tripgus\Http\Requests;
use Tripgus\Http\Controllers\Controller;
use Tripgus\Helppage;
use Tripgus\Info;
use Session;
use Redirect;
use DB;

class InfoController extends Controller
{

    public function find(Route $route)
    {
        $this->info = Info::find($route->getParameter('Info'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $helpPages = Helppage::all();
        $infos = Info::paginate(7);
        return view('admin.help.list', compact('infos', 'helpPages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Vistas = Helppage::lists('helpPageName','id');
        return view('admin.help.create', compact('Vistas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Info::create($request->all());
        Session::flash('message', 'usuario creado correctamente');
        return redirect('/Admin/Help/create');
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
        $Vistas = Helppage::lists('helpPageName','id');
        $Info = Info::find($id);
        return view('Admin.help.edit', ['info'=>$Info], compact('Vistas'));
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
        $Info = Info::find($id);
        $Info->fill($request->all());
        $Info->save();
        Session::flash('message', 'usuario modificado correctamente');
        return Redirect::to('/Admin/Help');
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
