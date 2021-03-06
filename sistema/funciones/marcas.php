<?php

    ############################
    ###### CRUD de marcas ######

    function listarMarcas()
    {
        $link = conectar();
        $sql = "SELECT idMarca, mkNombre
                        FROM marcas";
        $resultado = mysqli_query($link, $sql);
        return $resultado;
    }

    function agregarMarca()
    {
        $mkNombre = $_POST['mkNombre'];
        $link = conectar();
        $sql = "INSERT INTO marcas
                           ( mkNombre )
                        VALUES
                           ( '".$mkNombre."' )";
        $resultado = mysqli_query($link, $sql);
        return $resultado;
    }

    /**
    * Funcion para saber si hay productos de una marca
    * @return int $cantidad
    */
    function cantidadProductosPorMarca()
    {
        $idMarca = $_GET['idMarca'];
        $link = conectar();
        $sql = 'SELECT 1 FROM productos
                    WHERE idMarca ='. $idMarca;
        $resultado = mysqli_query($link, $sql)
                        or die(mysqli_error($link));
        $cantidad = mysqli_num_rows($resultado);
        return $cantidad;
    }

    function verMarcaPorID()
    {
        $idMarca = $_GET['idMarca'];
        $link = conectar();
        $sql = "SELECT idMarca, mkNombre 
                    FROM marcas 
                    WHERE idMarca = ".$idMarca;
        $resultado = mysqli_query( $link, $sql )
                            or die( mysqli_error($link) );
        $marca = mysqli_fetch_assoc($resultado);
        return $marca;
    }


    /**
     * listarMarcas()
     * verMarcaPorID()
     * agregarMarca()
     * modificarMarca()
     * eliminarMarca()
     */