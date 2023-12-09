<?php
    session_start();
    if((!isset($_SESSION['id']) == true) and (!isset($_SESSION['nome']) == true) and (!isset($_SESSION['email']) == true)){
        unset($_SESSION['id']);
        unset($_SESSION['nome']);
        unset($_SESSION['email']);
        header('Location: ../index.html');
    }
    require('conecta.php');

?>
<?php
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
            <!--/.col-->
            <div class="col-sm-8">
                <div class="card">
                    <form action="cadastra_usuario.php" method="POST">
                        <h2>Inserir novo usuário do sistema</h2>
                        <div class="mb-3">
                            <label for="nome_usuario" class="form-label">Nome do Usuário</label>
                            <input type="text" class="form-control" id="nome_usuario" name="nome_usuario">                            
                        </div>
                        <div class="mb-3">
                            <label for="email_usuario" class="form-label">Email do Usuário</label>
                            <input type="email" class="form-control" id="email_usuario" name="email_usuario">
                        </div>
                        <div class="mb-3">
                            <label for="senha" class="form-label">Senha</label>
                            <input type="password" class="form-control" id="senha" name="senha">
                        </div>                        
                        <button type="submit" class="btn btn-primary">Cadastrar Novo Usuário</button>
                    </form>
                </div>
            </div>
            <!--/.col-->
        </div> <!-- .content -->
    </div><!-- /#right-panel -->
    <!-- Fim Painel Direito -->

    <style>
        h2{
            padding: 10px;
        }
        label{
            padding: 5px;
        }
        input{
            padding: 10px;
        }
        .card{
            padding: 10px;
        }
        button{
            margin: 5px;
        }
    </style>

    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>

</body>
</html>