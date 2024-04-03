<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <title>Titulo</title>
</head>
<body class="bg-white">
    <!--CONTEÚDO-->
    <div class="container-fluid">
        <div class="row flex-nowrap">
            <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark fixed-top">
                <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                    <a href="" class="d-flex align-items-center py-1 mb-md-0 me-md-auto text-white text-decoration-none">
                        <span class="fs-3 d-none d-sm-inline align-middle">Menu</span>
                    </a>
                    <hr class="border-white border-2 opacity-50 col-12">
                    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                        <li>
                            <a href="{{route('cliente.index')}}" class="nav-link px-0 align-middle">
                                <i class="fs-4 bi bi-card-list align-middle text-white"></i> <span class="ms-1 d-none d-sm-inline text-white align-middle">Vizualizar Lista</span></a>
                        </li>
                        <li>
                            <a href="{{route('cliente.prioridade')}}" class="nav-link px-0 align-middle">
                                <i class="fs-4 bi bi-person-lines-fill align-middle text-white"></i> <span class="ms-1 d-none d-sm-inline text-white align-middle">Prioridade</span></a>
                        </li>
                        <li>
                            <a href="{{route('cliente.create')}}" class="nav-link px-0 align-middle">
                                <i class="fs-4 bi bi-person-add align-middle text-white"></i> <span class="ms-1 d-none d-sm-inline text-white align-middle">Adicionar Cliente</span> </a>
                        </li>
                        <li>
                            <a href="{{route('users.index')}}" class="nav-link px-0 align-middle">
                                <i class="fs-4 bi bi-person-lock align-middle text-white"></i> <span class="ms-1 d-none d-sm-inline text-white align-middle">Usuários</span> </a>
                        </li>
                        <li>
                            <a href="{{route('db')}}" class="nav-link px-0 align-middle">
                                <i class="fs-4 bi bi-database align-middle text-white"></i> <span class="ms-1 d-none d-sm-inline text-white align-middle">Ações Banco de Dados</span> </a>
                        </li>
                    </ul>
                    <hr class="border-white border-2 opacity-50 col-12">    
                    <div class="dropdown pb-4">
                        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="https://t4.ftcdn.net/jpg/03/49/49/79/360_F_349497933_Ly4im8BDmHLaLzgyKg2f2yZOvJjBtlw5.webp" alt="hugenerd" width="30" height="30" class="rounded-circle">
                            <span class="d-none d-sm-inline mx-1">{{auth()->user()->login}}</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                            <li><a class="dropdown-item" href="#">Meu Perfil</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="{{route('login.destroy')}}">Sign out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col py-3 bg-white" style="margin-left: 16.5%">
                @yield('conteudo')
            </div>
        </div>
    </div>
            
          
        
</body>
</html>  



