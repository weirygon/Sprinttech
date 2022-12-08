<?php

namespace App\Http\Controllers;

use Illuminate\Http\File;
use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PatientController extends Controller
{
    public function index(){

        return view('home', ['patients' => Patient::all()]);
    }

    public function create(){

        return view('create');
    }

    public function show($id){

        return view('show', ['patient' => Patient::find($id)]);
    }

    public function store(Request $request){

        $patient = new Patient();
        $patient->id = $request->input('cpf');
        $patient->nome = $request->input('nome');
        $patient->genero = $request->input('genero');
        $patient->email = $request->input('email');
        $patient->dataNascimento = $request->input('dataNascimento');
        $patient->telefone = $request->input('telefone');
        $patient->inicioTratamento = $request->input('inicioTratamento');
        $patient->previsao = $request->input('previsao');
        $patient->tratamento = $request->input('tratamento');
        $patient->laudo = $request->input('laudo');

        $dir = '/public/patient/img/' . $patient->id;
        
        Storage::putFileAs($dir, $request->file('image'), 'profile.jpg');


        $patient->save();

        return redirect('/');
    }

}
