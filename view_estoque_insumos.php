 <!DOCTYPE html>
    <html>

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="_css/bootstrap-4.1.3-dist/css/bootstrap.min.css">
        <title>Controle de Insumos</title>
    </head>

    <body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

        <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand h1 mb-0" href="#">Sistema de Controle de Insumos</a>

            <div class="collapse navbar-collapse" id="menu">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a href="#" class="nav-link">Estoque de Insumos</a>
                    </li>
                     <li class="nav-item">
                        <a href="#" class="nav-link">Utilizar insumo</a>
                    </li>
              
                    <li class="nav-item">
                        <a href="#" class="nav-link">Registrar chegada de insumos</a>
                    </li>

                    <li class="nav-item">
                        <a href="#" class="nav-link">Registrar coleta de insumos</a>
                    </li>
                </ul>
                
                <ul class="navbar-nav ml-auto">
                    <li class="nav-iten dropdown ">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" id="navDrop" href="#">Botao</a>
                        <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Perfil</a>
                        <a class="dropdown-item" href="#">Sair</a>
                    </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
    <!-- Modal -->
    <div class="modal" id="erroLogin" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-tittle">Falha na autenticação</h5>
                    <button class="close" type="button" data-dismiss="modal" >
                        <span>X</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Usuário e/ou senha inválido(s)</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal"></button>
                </div>
                
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="_js/jquery-3.3.1.slim.min.js"></script>
    <script src="_js/popper.min.js"></script>
    <script src="_css/bootstrap-4.1.3-dist/js/bootstrap.min.js"></script>
    </body>

    </html>