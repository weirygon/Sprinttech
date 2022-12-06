<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function index(){

        return view('home');
    }

    public function create(){

        return view('create');
    }

    public function show($id){

        return view('show');
    }

}
