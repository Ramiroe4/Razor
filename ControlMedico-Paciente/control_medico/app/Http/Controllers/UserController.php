<?php

namespace App\Http\Controllers;

use App\User;
use App\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Session;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::orderBy('id', 'DESC')->get();
        return view('users.index')->with('users',$users);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $user = new User;
        $user->name = Input::get('name');
        $user->lastName = Input::get('lastName');
        $user->sexo = Input::get('sexo');
        $user->dateBorn = Input::get('dateBorn');
        $user->typeUser = Input::get('typeUser');
        $user->email = Input::get('email');
        $user->password = Input::get('password');

        if ($user->save()) {
            Session::flash('message', 'Guardado correctamente');
            Session::flash('class', 'success');
        }
        else{
            Session::flash('message', 'Ha ocurrido un error');
            Session::flash('class', 'danger');
        }
        return Redirect::to('appointments/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Phone  $phone
     * @return \Illuminate\Http\Response
     */
    public function show($id = null)
    {
        $user = User::find($id);
        return view('users.show')->with('user', $user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Phone  $phone
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {      
    	$user = User::find($id);
    	$user->name = Input::get('name');
        $user->lastName = Input::get('lastName');
        $user->sexo = Input::get('sexo');
        $user->dateBorn = Input::get('dateBorn');
        $user->typeUser = Input::get('typeUser');
        $user->email = Input::get('email');
        if ($user->save()) {
            Session::flash('message', 'Actualizado correctamente');
            Session::flash('class', 'success');
        }
        else{
            Session::flash('message', 'Ha ocurrido un error');
            Session::flash('class', 'danger');
        }
        return Redirect::to('users/edit/'.$id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Phone  $phone
     * @return \Illuminate\Http\Response
     */
    public function edit($id = null)
    {
        $user = User::find($id);
        return view('users.edit')->with('user', $user);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Phone  $phone
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        if ($user->delete()) {
            Session::flash('message', 'Eliminado correctamente');
            Session::flash('class', 'success');
        }
        else{
            Session::flash('message', 'Ha ocurrido un error');
            Session::flash('class', 'danger');
        }
        return Redirect::to('appointments');

    }
}
