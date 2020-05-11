<?php

    function conectar()
    {
        $link = mysqli_connect(
            'localhost',
            'root',
            'root',
            'catalogoPHP'
        );
        return $link;
    }
