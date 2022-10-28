<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="apoyo.css">
    <title>Document</title>
</head>
<?php 
    include_once ("conexion.php");
    Cconexion::ConexionBD();
    ?>
<body>
    <div class="container">
        <h2>¿Tienes Alguna duda?</h2>
        <h3>Llena este formulario</h3>
        <form action="https://formspree.io/f/xzbwjzjb" method="POST">
            <form action="datos.php" method="post"></form>
            <input style="text-transform: capitalize" type="text" class="controls"  name="Nombre"  placeholder="Nombre completo" id="Nombre" autocomplete="off" required>
            <input style="text-transform: capitalize" type="text" class="controls" name="Codigo"  placeholder="Codigo UTP" id="Codigo" autocomplete="off" maxlength="9" required>
            <input type="email" class="controls"  name="Email" placeholder="Ingresar Correo" id="Email" autocomplete="off" required>
            <input type="number" class="controls"  name="Número"  placeholder="Numero de celular" id="Número" autocomplete="off">
            <select name="Asunto" class="controls1">
                <option>Reclamo</option>
                <option>Soporte</option>
                <option>Sugerencia</option>
            </select>
            <textarea name="Mensaje" class="controls3" placeholder="Mensaje" required></textarea>
            <button class="button" type="submit">Enviar</button>
        </form>
    <?php
        $nombre=$_POST['Nombre'];
        $codigo=$_POST['Codigo'];
        $emal=$_POST['Email'];
        $numero=$_POST['Numero'];
        $asunto=$_POST['Asunto'];
        $mensaje=$_POST['Mensaje'];
        $sql = "INSERT INTO formula (nombre, codigo, email, numero, asunto, mensaje) VALUES ($nombre, $codigo,
         $emal, $numero, $asunto, $mensaje)";
        if (mysqli_query($conn, $sql)) {
            echo "SE ENVIO CORRECTAMENTE";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
        mysqli_close($conn);
    ?>
    </div>
    
</body>
</html>