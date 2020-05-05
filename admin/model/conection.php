<?php
    function establish () {
        // echo "hola mundo";
        $usuario = "root";
        $contrasena = "";  // en mi caso tengo contraseña pero en casa caso introducidla aquí.
        $servidor = "localhost";
        $basededatos = "OwnPlayer";
        $conection = mysqli_connect( $servidor, $usuario, "") or die ("No se ha podido conectar al servidor de Base de datos");
        $db = mysqli_select_db( $conection, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );        
        return $conection;
    }
    return false;
?>
