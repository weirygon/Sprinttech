@extends('layout.main')

@section('titulo', 'Cadastro')

@section('paragrafo', 'Cadastrar paciente')

@section('conteudo')

<div class="cadastro-box">
    <!-- Div para cadastrar informações do paciente --->
    <div class="box-paciente">

        <div class="paciente" id="form" method="POST" enctype="multipart/form-data" >
            <div class="line1">
                <div class="name">
                    <label for="nome">NOME</label>
                    <input class="paciente_name" type="text" name="nome" placeholder="Nome Completo" maxlenght="30">
                </div>
                <div class="form-img">
                    <label></label>
                    <input type="file" id="image" name="image" class="from-control-file">  
                </div>
            </div>
            <div class="line2">
                <div class="esq-line2">
                    <label for="genero">GENERO</label>
                    <input class="paciente" type="text" name="genero" placeholder="FEMININO/MASCULINO">
                </div>
                <div class="dir-line2">
                    <label for="idade">IDADE</label>
                    <input class="paciente" type="text" name="idade">
                </div>
            </div>
            <div class="line3">
                <label for="email">EMAIL</label>
                <input class="paciente" type="email" name="email" placeholder="E-mail (ex: abc@email.com)" maxlenght="40">
            </div>
            <div class="line4">
                <div class="esq-line4">
                    <label for="dataNascimento">DATA DE NASCIMENTO</label>
                    <input class="paciente" type="date" name="dataNascimento">
                </div>
                <div class="dir-line4">
                    <label for="telefone">TELEFONE</label>
                    <input class="paciente" type="text" name="telefone" placeholder="Telefone (xx xxxx-xxxx)" maxlenght="30">
                </div>
            </div>
            <div class="line5">
                <div class="esq-line5">
                    <label for="inicioTratamento">INICIO DO TRATAMENTO</label>
                    <input class="paciente" type="date" name="inicioTratamento">
                </div>
                <div class="dir-line5">
                    <label for="previsao">PREVISÃO</label>
                    <input class="paciente" type="text" name="previsao">
                </div>
            </div>
        </div>
    </div>

    <!-- Div para caixa de texto tratamento --->
    <div class="anamnese" method="POST">
        <div class="head-anamnese">
            <h1>ANAMESE/TRATAMENTO</h1>
            <hr />
        </div>
        <div class="text-tratamento">
            <textarea rows="8" cols="50" name="tratamento" id="comment" maxlength="2000" minlength="20"></textarea>
            <label for="tratamento">(máx. 2000 caracteres)</label>
        </div>
    </div>
    <!-- Div para envio dos exames e o laudo do profissional --->
    <div class="exame-box" method="POST" enctype="multipart/form-data">
        <div class="head-exame-box">
            <h1>ARQUIVO EXAME</h1>
            <hr />
        </div>
        <div class="right-left-exame">
            <div class="form-img">
                <label></label>
                <input type="file" id="image" name="image" class="from-control-file">  
            </div>
            <div class="laudo-exame">
                <div class="text-laudo">
                    <h1>Laudo</h1>
                    <textarea rows="6" cols="35" name="laudo" id="comment" maxlength="2000" minlength="20"></textarea>
                    <label for="laudo">(máx. 1000 caracteres)</label>
                </div>
            </div>
        </div>

    </div>
    <div class="paciente">
        <input class="paciente" type="submit" value="CADASTRAR">
    </div>
</div>

@endsection