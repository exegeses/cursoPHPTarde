<?php

    /**
     * funciones de login de usuarios y autenticacion
     */

    function login()
    {
        $usuEmail = $_POST['usuEmail'];
        $usuPass = $_POST['usuPass'];
        $link = conectar();
        $sql = "SELECT usuNombre, usuApellido
                    FROM usuarios
                    WHERE usuEmail = '".$usuEmail."'
                      AND  usuPass = '".$usuPass."'";
        $resultado = mysqli_query( $link, $sql )
                                or die( mysqli_error($link) );
        $cantidad = mysqli_num_rows($resultado);
        if( $cantidad == 1 ){
            ## rutina de autenticación

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

    }

    function autenticar()
    {

    }