<?php

class Cconexion{
    static function ConexionBD(){
        $host='localhost';
        $dbname='formulario';
        $usuario='root';
        $contrasena='';

        try {
            $conn=new PDO("mysql:host=$host;dbname=$dbname",$usuario,$contrasena);
            echo"Se conecto correctamente";
        } catch (PDOException $exp) {
            echo"No se logro conectar con la base datos: $dbname, error:$exp";
        }
        return $conn;
    }


}