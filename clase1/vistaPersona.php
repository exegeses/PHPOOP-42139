<?php
    require '../config/funciones.php';
    require 'Persona.php';
    //instanciar
    $Persona = new Persona;
    $Persona->setNombre('Cosme');
    $Persona->setApellido('Fulanito');
    mostrar($Persona);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="../css/estilos.css">
</head>
<body>
<h1>Vista persona</h1>

    <div class="objeto">
        <?= $Persona->verDatos()  ?>
    </div>
</body>
</html>
