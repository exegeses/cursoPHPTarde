<?php
    require 'config/config.php';
	include 'includes/header.html';  
	include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Ingreso a sistema</h1>

        <div class="alert alert-secondary p-4 col-6 mx-auto">
            <form action="login.php" method="post">
                Email: <br>
                <input type="email" name="usuEmail" class="form-control">
                <br>
                Contraseña: <br>
                <input type="password" name="usuPass" class="form-control">
                <br>
                <button class="btn btn-dark btn-block">
                    Ingresar
                </button>
            </form>
        </div>
<?php
        if ( isset( $_GET['error'] ) ){
            $error = $_GET['error'];
            if( $error == 1 ){
?>
            <div class="alert alert-danger p-4 col-6 mx-auto">
                Usuario y/o Clave incorrectos
            </div>
<?php
            }
            else{
?>
            <div class="alert alert-danger p-4 col-6 mx-auto">
                Debe loguearse para ingresar.
            </div>
<?php
            }
        }
?>
    </main>

<?php  include 'includes/footer.php';  ?>