<?php
    session_start();
    if((!isset($_SESSION['id']) == true) and (!isset($_SESSION['nome']) == true) and (!isset($_SESSION['email']) == true)){
        unset($_SESSION['id']);
        unset($_SESSION['nome']);
        unset($_SESSION['email']);
        header('Location: ../index.html');
    }
    require('conecta.php');

    $id_cliente = $_GET['id']; //Pega da URL

?>
<?php
    include_once('cabecalho.php');
?>

<div class="content mt-3">
            <div class="col-sm-8">
                <div>
                <div class="alert alert-danger" role="alert">
                <h3>Você quer deleter esse cliente!</h3>
                </div>
                <a href="apaga_cliente.php?id=<?php echo $id_cliente; ?>" class="btn btn-success" >Sim</a>
                <a href="index.php" class="btn btn-danger" >Não</a>
                </div>
            </div>
        </div> 
    </div>

    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>

</body>
</html>