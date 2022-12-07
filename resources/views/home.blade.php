@extends('layout.main')

@section('titulo', 'Sprinttech')

@section('paragrafo', 'Pacientes')

@section('conteudo')

    @forelse ($patients as $patient)

        {{ $pacient }}

    @empty
        <h2 style="text-align: center">🙁 Nenhuma vaga postada!</h2>   
    @endforelse

@endsection