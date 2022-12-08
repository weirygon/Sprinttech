@extends('layout.main')

@section('titulo', 'Sprinttech')

@section('paragrafo', 'Pacientes')

@section('scripts')
   
    <link rel="stylesheet" type="text/css" href="/css/home.css">

@endsection

@section('conteudo')

    {{ auth()->user()}}


    @if(isset($doctor))

        @forelse($doctor->patients as $patient)

        
        <div class="patient">

            <div class="pic-profile">
                <img src="/storage/patient/img/{{ $patient->id }}/profile.jpg" alt="pic-profile">
            </div>

            <div class="description-profile">

                <a href="/patient/{{ $patient->id }}" class="name-profile">{{ $patient->nome }}</a>
                <p> Nascimento: {{ $patient->dataNascimento }}</p>

            </div>

        </div>
        @empty
        <h2 style="text-align: center">Nenhuma paciente Cadastrado!</h2> 
        @endforelse

    @else

        <script>
            //window.location.href = "/doctor/create";
        </script>

    @endif

@endsection