<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Hoja de Trabajo 5</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php
$regex = "/^[^\s|\W](?=[\S\s]{1,29}$)[a-zA-Z]+\s[a-zA-Z]+$/";
$regexemail = "/^(([^<>()\[\]\\.,;:\s@”]+(\.[^<>()\[\]\\.,;:\s@”]+)*)|(“.+”))@((\[[0–9]{1,3}\.[0–9]{1,3}\.[0–9]{1,3}\.[0–9]{1,3}])|(([a-zA-Z\-0–9]+\.)+[a-zA-Z]{2,}))$/";

if (isset($_POST['btnEnviar'])) {
    if (preg_match($regex, $_POST['nombre']) AND preg_match($regex, $_POST['apellido']) AND preg_match($regexemail, $_POST['email'])) {
        $resultado = '<script>alert("Se ha registrado satisfactoriamente.");</script>';
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $correo = $_POST['email'];
    } else {
        $resultado = '<script>alert("Compruebe que los textos ingresados cumplen con las indicaciones sugeridas.");</script>';

    }
}
?>

<div class="container md" id="contenedor">
    <form method="POST" class="p-4">
        <div style="text-align: center;"><h4>Formulario de Registro</h4><br></div>
        <label><b>Nombre</b> <i>(requerido)</i></label><br>
        <input type="text" name="nombre" autofocus/><br><br>

        <label><b>Apellido</b> <i>(requerido)</i></label><br>
        <input type="text" name="apellido" autofocus/><br><br>

        <label><b>Email</b>  <i>(requerido)</i></label><br>
        <input type="text" name="email" autofocus/><br><br>
        <div style="text-align: center;"><input type="submit" value="Suscribirse" id="btnSuscribirse" name="btnEnviar" autofocus/></div><br><br>

        <?php if(isset($resultado)) {echo '&nbsp;'.$resultado.'';} ?>

    </form>

</div>
<br><br><br><br><br>
<pre>
        INDICACIÓN SUGERIDA PARA LOS CAMPOS NOMBRE Y APELLIDO:
        a. Coincida con tres vocales seguidas.
        b. Coincida con tres vocales.
        c. Coincida con dos palabras.
        d. Coincida con una frase de entre 20 y 30 caracteres.
        e. Coincida con dos «a» seguidas y dos «e» seguidas en cualquier orden.

        INDICACIÓN SUGERIDA PARA EL CAMPO EMAIL:
        a. Coincida con el formato de una dirección válida de correo electrónico

    </pre>
