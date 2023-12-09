<?php
    session_start();
    if((!isset($_SESSION['id']) == true) and (!isset($_SESSION['nome']) == true) and (!isset($_SESSION['email']) == true)){
        unset($_SESSION['id']);
        unset($_SESSION['nome']);
        unset($_SESSION['email']);
        header('Location: ../index.html');
    }
    require('conecta.php');
    include_once('cabecalho.php');
?>
        <div class="content mt-3">
            <div class="col-sm-12">
                <div class="alert  alert-success alert-dismissible fade show" role="alert">
                    <span class="badge badge-pill badge-success">Login efetuado</span> Você está logado com sucesso a sua conta.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Tabela de dados</strong>
                    </div>
                    <div class="card-body">
                        <div class="page-title">
                            <h3>Pesquisa de Clientes</h3>
                        </div>                        
                        <form action="" method="post">                            
                            <input class="form-control" type="text" id="nome" name="nome" onkeyup="buscarClientes()" placeholder="Digite uma inicial do nome do cliente...">
                        </form>                        
                        <div id="resultado"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        h3{
            padding: 10px;
        }
        input{
            margin-bottom: 15px;
            margin-top: 10px;
        }
        button{
            margin: 5px;
        }
    </style>

    <script>
        function buscarClientes() {
            var nome = document.getElementById('nome').value;
            $.ajax({
                type: 'post',
                url: 'pesquisa_cliente.php',
                data: {
                    nome: nome
                },
                success: function (response) {
                    document.getElementById('resultado').innerHTML = response;
                }
            });
        }
    </script>

    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>

</body>

</html>
