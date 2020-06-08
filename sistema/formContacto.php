<?php
    require 'config/config.php';
    require 'funciones/autenticar.php';
        autenticar();;
	include 'includes/header.html';  
	include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Formulario de Contacto</h1>

        <div class="alert bg-light p-3 col-8 mx-auto">
            <form action="contacto.php" method="post">
                Nombre: <br>
                <input type="text" name="nombre" class="form-control">
                <br>
                Email: <br>
                <input type="text" name="email" class="form-control">
                <br>
                Comentarios: <br>
                <textarea name="comentarios" class="form-control"></textarea>
                <br>
                <button class="btn btn-dark">Enviar comentarios</button>

            </form>
        </div>

    </main>

<?php  include 'includes/footer.php';  ?>