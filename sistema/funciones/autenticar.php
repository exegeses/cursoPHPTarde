<?php

    /**
     * funciones de login de usuarios y autenticacion
     */

    function login()
    {
        $usuEmail = $_POST['usuEmail'];
        $usuPass = $_POST['usuPass'];
        $link = conectar();
        $sql = "SELECT usuNombre, usuApellido, idRol
                    FROM usuarios
                    WHERE usuEmail = '".$usuEmail."'
                      AND  usuPass = '".$usuPass."'";
        $resultado = mysqli_query( $link, $sql )
                                or die( mysqli_error($link) );
        $cantidad = mysqli_num_rows($resultado);
        if( $cantidad == 1 ){
            ## rutina de autenticación
            $_SESSION['login'] = 1;
            $usuario = mysqli_fetch_assoc($resultado);
            $_SESSION['usuario'] = $usuario['usuNombre'].' '.$usuario['usuApellido'];
            $_SESSION['idRol'] = $usuario['idRol'];
            //redirección a admin
            header( 'location: admin.php' );
        }
        else{
            //redirección a formLogin
            header( 'location: formLogin.php?error=1' );
        }
    }

    function logout()
    {
        session_unset(); // no es necesario ya que se eliminará la sesion
        session_destroy();

        ### redirección con demora
        header('refresh:3; url=index.php');
    }

    function autenticar()
    {
        if ( !isset( $_SESSION['login'] ) ){
            header('location: formLogin.php?error=2');
        }
    }

    function esAdmin()
    {
        if ( $_SESSION['idRol'] != 1  ){
            header('location: formLogin.php?error=3');
        }
    }