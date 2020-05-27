<?php

    ################################
    ###### CRUD de productos ######

    function listarProductos()
    {
        $link = conectar();
        $sql= "SELECT 
                        idProducto, prdNombre, prdPrecio, 
                        p.idMarca, mkNombre, p.idCategoria, catNombre, 
                        prdPresentacion, prdStock, 
                        prdImagen 
                 FROM 
                        productos p, marcas m, categorias c
                 WHERE 
                        p.idMarca = m.idMarca
                  AND   p.idCategoria = c.idCategoria";

        $resultado = mysqli_query( $link, $sql );
        return $resultado;
    }

    function subirArchivo()
    {
        $prdImagen = 'noDisponible.jpg'; // si NO enviaron archivo en AGREGAR

        if( isset($_POST['imgOriginal']) ){ // si NO enviaron nada en MODIFICAR
            $prdImagen = $_POST['imgOriginal'];
        }

        if( $_FILES['prdImagen']['error'] == 0 ){  // si enviaron archivo y esta OK
            $path = 'productos/';
            $prdImagen = $_FILES['prdImagen']['name'];
            $tmp = $_FILES['prdImagen']['tmp_name'];
            move_uploaded_file($tmp, $path.$prdImagen );
        }
        return $prdImagen;
    }

    function agregarProducto()
    {
        //capturamos detos desde el form
        $prdNombre = $_POST['prdNombre'];
        $prdPrecio = $_POST['prdPrecio'];
        $idMarca = $_POST['idMarca'];
        $idCategoria = $_POST['idCategoria'];
        $prdPresentacion = $_POST['prdPresentacion'];
        $prdStock = $_POST['prdStock'];
        $prdImagen = subirArchivo();

        $link = conectar();
        $sql = "INSERT INTO productos 
                    (
                        prdNombre, prdPrecio, 
                        idMarca, idCategoria, 
                        prdPresentacion, prdStock, 
                        prdImagen
                    )
			      VALUES 
			        (
			            '".$prdNombre."', 
			            ".$prdPrecio.", 
			            ".$idMarca.", 
			            ".$idCategoria.", 
			            '".$prdPresentacion."', 
			            ".$prdStock.", 
			            '".$prdImagen."'
			        )";
        $resultado = mysqli_query( $link, $sql )
                            or die( mysqli_error($link) );
        return $resultado;
    }

    function verProductoPorID()
    {
        $idProducto = $_GET['idProducto'];

        $link = conectar();
        $sql= "SELECT 
                        idProducto, prdNombre, prdPrecio, 
                        p.idMarca, mkNombre, p.idCategoria, catNombre, 
                        prdPresentacion, prdStock, 
                        prdImagen 
                 FROM 
                        productos p, marcas m, categorias c
                 WHERE 
                        p.idMarca = m.idMarca
                  AND   p.idCategoria = c.idCategoria
                  AND   p.idProducto = ".$idProducto;
        $resultado = mysqli_query( $link, $sql )
                                or die( mysqli_error($link) );
        $producto = mysqli_fetch_assoc($resultado);
        return $producto;
    }

    function modificarProducto()
    {
        //capturamos detos desde el form
        $idProducto = $_POST['idProducto'];
        $prdNombre = $_POST['prdNombre'];
        $prdPrecio = $_POST['prdPrecio'];
        $idMarca = $_POST['idMarca'];
        $idCategoria = $_POST['idCategoria'];
        $prdPresentacion = $_POST['prdPresentacion'];
        $prdStock = $_POST['prdStock'];
        $prdImagen = subirArchivo();

        $link = conectar();

        $sql = "UPDATE productos 
                    SET 
                        prdNombre = '".$prdNombre."', 
                        prdPrecio = ".$prdPrecio.", 
                        idMarca = ".$idMarca.", 
                        idCategoria = ".$idCategoria.", 
                        prdPresentacion = '".$prdPresentacion."', 
                        prdStock = ".$prdStock.", 
                        prdImagen ='".$prdImagen."' 
                    WHERE 
                        idProducto = ".$idProducto;

        $resultado = mysqli_query($link, $sql)
                                or die( mysqli_error( $link ) );
        return $resultado;
    }

    /**
     * listarProductos()
     * verProductoPorID()
     * agregarProducto()
     * modificarProducto()
     * eliminarProducto()
     */