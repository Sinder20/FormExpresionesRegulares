<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
<head>
    <meta charset="UTF-8">
    <title>Hoja de Trabajo 5</title>
</head>
<body>
<?php
// EXPRESIONES REGULARES

$saludo = "AL SISTEMA DE EXPRESIONES REGULARES";
$regex2 = "/\b([A-ZÑ][a-zñ]\s{2},{1,30})/";
$regex3 = "/(^[a-zA-Z] + [a-zA-Z]{2,30}) + $ /";
$regex = "/([a-zA-Z]{2,30}\s*)+$/";
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

<form method="POST">
    <form method="POST">
        Nombre<br>
        <input type="text" name="nombre" autofocus/><br><br>
        Apellido<br>
        <input type="text" name="apellido" autofocus/><br><br>
        Email<br>
        <input type="text" name="email" autofocus/><br><br>
        <input type="submit" name="btnEnviar" autofocus/>

        <?php if(isset($resultado)) {echo '&nbsp;'.$resultado.'';} ?>
</form>

</body>
</html>
