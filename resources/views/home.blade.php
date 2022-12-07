@extends('layout.main')

@section('titulo', 'Sprinttech')

@section('paragrafo', 'Pacientes')

@section('scripts')
   
    <link rel="stylesheet" type="text/css" href="/css/home.css">

@endsection

@section('conteudo')

    @forelse ($patients as $patient)

    
    <div class="patient">

        <div class="pic-profile">
            <img src="/" alt="pic-profile">
        </div>

        <div class="description-profile">

            <a href="/patient/{{ $patient->id }}" class="name-profile">{{ $patient->nome }}</a>
            <p>{{ $patient->dataNascimento }}</p>

        </div>

    </div>


    @empty
            <h2 style="text-align: center">Não ha nenhum paciente!</h2>

    @endforelse

@endsection