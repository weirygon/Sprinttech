<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Patient;

class PatientController extends Controller
{
    public function index(){

        return view('home', ['patients'-> Patient::lista()]);
    }

    public function create(){

        return view('create');
    }

    public function show($id){

        return view('show', ['patient' -> Patient::get($id)]);
    }


    public function store(Request $request){
 
        $patient = new Patient();
        $patient->id = Str::random(6);
        $patient->name = $request->input('name');
        $patient->gender = $request->input('gender');
        $patient->email = $request->input('email');
        $patient->born_date = $request->input('born_date');
        $patient->phone = $request->input('phone');
        $patient->start_date = $request->input('start_date');
        $patient->end_date = $request->input('end_date');
        $patient->treatment = $request->input('treatment');
        $patient->report = $request->input('report');

        $patient->save();

        return redirect('/');

    }

}
