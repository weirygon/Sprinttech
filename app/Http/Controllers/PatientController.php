<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function index(){

        return view('home', ['patients' => Patient::all()]);
    }

    public function create(){

        return view('create');
    }

    public function show($id){

        return view('show');
    }

    public function store(Request $request){

        $patient = new Patient();
        $patient->nome = $request->input('nome');
        $patient->genero = $request->input('genero');
        $patient->email = $request->input('email');
        $patient->dataNascimento = $request->input('dataNascimento');
        $patient->telefone = $request->input('telefone');
        $patient->previsao = $request->input('previsao');
        $patient->tratamento = $request->input('tratamento');
        $patient->laudo = $request->input('laudo');

        $patient->save();

        return redirect('/');

    }

}
