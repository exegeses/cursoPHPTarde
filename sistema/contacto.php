<?php
    require 'config/config.php';
    require 'funciones/autenticar.php';
            autenticar();;
	include 'includes/header.html';  
	include 'includes/nav.php';

	## capturamos datos enviados por el form
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $comentarios = $_POST['comentarios'];

    ## configuramos datos de email a enviar
    $destinatario = 'ACA PONE TU EMAIL';
    $asunto = 'Email enviado desde mi sitio';
    $cuerpo = '<div style="width: 500px; padding: 20px; background-color: #d9d9d9; margin:auto">';
    $cuerpo .= 'Nombre: '.$nombre.'<br>';
    $cuerpo .= 'Email: '.$email.'<br>';
    $cuerpo .= 'Comentarios: '.$comentarios;
    $cuerpo .= '</div>';

    $headers = 'MIME-Version: 1.0';
    $headers .= 'Content-type: text/html; charset=utf-8';
    // Additional headers
    $headers .= 'From: Cthulu <cthulu@hp-lovecraft.com>';

    ## enviamos el email
    mail($destinatario, $asunto, $cuerpo, $headers);
?>

    <main class="container">
        <h1>Contacto</h1>

        <div class="alert alert-info p-3">
            Gracias <?= $nombre ?> por contactarnos.
        </div>

    </main>

<?php  include 'includes/footer.php';  ?>