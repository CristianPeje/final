<?php

include("conectar.php");

if (isset($_POST['form']))
{
    if (strlen($_POST['Correoelectronico']) >= 1 && strlen($_POST['Pais']) >= 1) // validando que correo y clave tengan caracteres 
    {
        // datos del formulario asignados a una variable & con formato
        $nombre = trim($_POST['Nombre']); 
        $apellido = trim($_POST['Apellido']);
        $email = trim($_POST['Correoelectronico']);
        $pais = $_POST['Pais'];
        $comentario = $_POST['comentario'];
        $cantReg = 0;

        $consulta = "INSERT INTO `comentarios`(Nombre, Apellido, Correoelectronico, Pais, comentario) VALUES ('$nombre', '$apellido', '$email', '$pais', '$comentario')";
        
        $resultado = mysqli_query($bscomentario, $consulta);

        if ($resultado) 
        {
            echo '<h2>El registro fue exitoso</h2>';
        } else {
            echo '<h2>A ocurrido un error</h2>';
        }
    }
    else
    {
        echo '<h2>No ha ingresado datos</h2>';
    }
}

?>