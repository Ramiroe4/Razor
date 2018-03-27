<?php

namespace App\Http\Controllers;

use App\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Session;
use Illuminate\Support\Facades\Redirect;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $appointments = Appointment::orderBy('id', 'DESC')->get();
        return view('appointments.index')->with('appointments',$appointments);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('appointments.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $appointment = new Appointment;
        $appointment->created_appoi = Input::get('created');
        $appointment->date_apoint = Input::get('date_appoi');
        $appointment->id_doctor = Input::get('id_doctor');
        $appointment->id_patient = Input::get('id_patient');

        if ($appointment->save()) {
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
        $appointment = Appointment::find($id);
        return view('appointments.show')->with('appointment', $appointment);
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
        $appointment = Appointment::find($id);
        $appointment->created_appoi = Input::get('created');
        $appointment->date_apoint = Input::get('date_appoi');
        $appointment->id_doctor = Input::get('id_doctor');
        $appointment->id_patient = Input::get('id_patient');

        if ($appointment->save()) {
            Session::flash('message', 'Actualizado correctamente');
            Session::flash('class', 'success');
        }
        else{
            Session::flash('message', 'Ha ocurrido un error');
            Session::flash('class', 'danger');
        }
        return Redirect::to('appointments/edit/'.$id);
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
        $appointment = Appointment::find($id);
        return view('appointments.edit')->with('appointment', $appointment);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Phone  $phone
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $appointment = Appointment::find($id);
        if ($appointment->delete()) {
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
