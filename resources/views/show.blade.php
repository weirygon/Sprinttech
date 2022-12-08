@extends('layout.main')

@section('titulo', " $patient->nome ")

@section('paragrafo', " $patient->nome ")

@section('scripts')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/css/show.css">

@endsection

@section('conteudo')

    <div class="container-block-patient">
        <div class="block-patient">
            <div class="head-patient">
                <div id="title">
                    <h1>PACIENTE</h1>
                </div>
                <div id="edit_date">
                    <button>EDITAR DADOS</button>
                </div>
            </div>
            <hr />
            <div class="date">
                <div class="patient-data">
                    <div class="line1">
                        <div id="name">
                            <label>NOME:</label>
                            <label>{{ $patient->nome }}</label>
                        </div>
                        <div id="genre">
                            <label>GENÊRO:</label>
                            @if( $patient->genero )
                                <label>Masculino</label>
                            @else
                                <label>Feminino</label>
                            @endif
                        </div>
                    </div>
                    <div class="line2">
                        <div id="email">
                            <label>EMAIL:</label>
                            <label>{{ $patient->email }}</label>
                        </div>
                        <div id="age">
                            <label>IDADE:</label>
                            <label>{{ $patient->dataNascimento }}</label>
                        </div>
                    </div>
                    <div class="line3">
                        <div id="birth">
                            <label>DATA DE NASCIMENTO:</label>
                            <label>{{ $patient->dataNascimento }}</label>
                        </div>
                        <div id="phone">
                            <label>TELEFONE:</label>
                            <label>{{ $patient->telefone }}</label>
                        </div>
                    </div>
                    <div class="line4">
                        <div id="start-treatment">
                            <label>INICIO DO TRATAMENTO:</label>
                            <label> </label>
                        </div>
                        <div id="treatment-prediction">
                            <label>PREVISÃO DO TRATAMENTO:</label>
                            <label>{{ $patient->previsao }}</label>
                        </div>
                    </div>
                </div>
                <div class="patient-image">
                    <img src="/storage/patient/img/{{ $patient->id }}/profile.jpg" alt="pic-profile">
                </div>
            </div>
        </div>
    </div>
    <div class="container-block-anamnesis">
        <div class="block-anamnesis">
            <h1>ANAMNESE/TRATAMENTO</h1>
            <hr />
            <p>{{ $patient->tratamento }}</p>
        </div>
    </div>
    <div class="container-exam">
        <h1>EXAMES</h1>
        <hr />

        @foreach ($patient->exams as $exam)

        <div class="exam">
            <p>Publicado: {{ $exam->created_at->diffForHumans() }}</p>
            <div class=content-Exam>
                <div class="img-Exam">
                    <img src="/storage/patient/img/{{ $patient->id }}/{{ $exam->img }}" alt="imageExam">
                </div>
                <div class="laudo-exam">
                    <p>Laudo: </p>
                    <p>{{ $exam->laudo }}</p>
                </div>
            </div>
        </div>

        @endforeach

    </div>
    </div>

@endsection