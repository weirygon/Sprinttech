<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <script src="https://kit.fontawesome.com/069a3296de.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/css/styles.css">

    <title>@yield('titulo')</title>

</head>
<header>

    <!-- BootStrap -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

   
        
    <div class="logo">
        <img src="/img/sprinttech.svg" alt="sprinttech">
    </div>

    <div class="dropdown">
        <button class="user" type="button" id="dropdownMenu2" data-bs-toggle="dropdown"
            aria-expanded="false">
            <i class="fas fa-user-circle fa-xl"></i>
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
            <li><a class="dropdown-item" href="#">CADASTRAR CLIENTE</a></li>
            <li><a class="dropdown-item" href="#">MEUS DADOS</a></li>
            <li><a class="dropdown-item" href="#">SAIR</a></li>
        </ul>
    </div>

</header>

<body>

    <div class="description">
        <h1>@yield('paragrafo')</h1>
    </div>

    <div class="container">
        @yield('conteudo')
    </div>

</body>

</html>