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
                            <label>GENERO:</label>
                            <label>{{ $patient->genero }}</label>
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
    <div class="container-block-exam">
        <h1>EXAMES</h1>
        <hr />
        <div class="block-exam">
            <div class="exam-report">
                <div id="exam">
                    <label>EXAMES:</label>
                    <p>
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="/"  class="d-block w-100" alt="">
                            </div>
                            <div class="carousel-item">
                                <img src="/" class="d-block w-100" alt="">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        </button>
                    </div>
                    </p>
                </div>
                <div id="report">
                    <label>LAUDO:</label>
                    {{ $patient->laudo }}
                </div>
            </div>
            <!-- Div para envio dos exames e o laudo do profissional --->
            <div class="new-exam" method="POST" enctype="multipart/form-data">
                <div class="form">
                    <div class="left-form">
                        <div class="form-img">
                            <input type="file" id="image" name="image" class="from-control-file">
                        </div>
                    </div>
                    <div class="right-form">
                        <div class="text-report">
                            <textarea rows="6" cols="35" name="report" id="comment" maxlength="2000"
                                minlength="20"></textarea>
                            <label for="report">(máx. 1000 caracteres)</label>
                        </div>
                    </div>
                </div>
                <p>
                    <div id="edit_date">
                        <button>EDITAR LAUDO</button>
                    </div>
                </p>
            </div>
        </div>
    </div>
    </div>

@endsection