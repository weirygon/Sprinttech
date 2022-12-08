<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;

class DoctorController extends Controller
{
    public function index(){
        Carbon::setLocale('pt');
        return view('home', ['doctor' => Doctor::find(54321)]);
    }

    public function create(){
        return view('create');
    }

    public function store(Request $request)
    {

        $request->validate([
            'cro' => 'required|max:5|min:5',
            'imageProfile' => 'required',
            'nome' => 'required',
            'genero' => 'required',
            'email' => 'required',
            'dataNascimento' => 'required',

        ]);


        $doctor = new Doctor();
        $doctor->id = $request->input('cro');
        $doctor->nome = $request->input('nome');
        $doctor->genero = $request->input('genero');
        $doctor->email = $request->input('email');
        $doctor->dataNascimento = $request->input('dataNascimento');

        // UPLOAD IMG
        $dir = '/public/doctor/img/' . $doctor->id;
        
        Storage::putFileAs($dir, $request->file('imageProfile'), 'profile.jpg');

        $doctor->save();

        return view('home', ['doctor' => $doctor]);
        
    }
}
