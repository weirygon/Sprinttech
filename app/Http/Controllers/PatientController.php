<?php

namespace App\Http\Controllers;

use App\Models\Exam;
use Illuminate\Http\File;
use Carbon\Carbon;
use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PatientController extends Controller
{

    public function index(){
        Carbon::setLocale('pt');
        return view('home', ['patients' => Patient::all()]);
    }

    public function create(){

        return view('create');
    }

    public function show($id){
        Carbon::setLocale('pt');
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

       

        // UPLOAD IMG
        $dir = '/public/patient/img/' . $patient->id;
        
        Storage::putFileAs($dir, $request->file('imageProfile'), 'profile.jpg');

        $imageName = md5($request->file('imageExam')->getFilename().strtotime("now")).".jpg";
        Storage::putFileAs($dir, $request->file('imageExam'), $imageName);

        $exam = Exam::firstOrCreate([
            'laudo' => $request->input('laudo'),
            'img' => $imageName
        ]);

        $patient->exam_id = $exam->id;

        $patient->save();

        return redirect('/');
    }

}
