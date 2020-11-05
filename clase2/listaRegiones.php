<?php
    require '../config/funciones.php';

    $link = new PDO(
        'mysql:host=localhost;dbname=agencia',
        'root',
        'root'
    );
    $sql = "SELECT regID, regNombre
                FROM regiones";

    $stmt = $link->prepare($sql);
    $stmt->execute();

    /* hay dos métodos
        fetch()   que trae un sólo registro
        fetchAll()   que trae todos los registro
    */

//    $fila = $stmt->fetch(PDO::FETCH_ASSOC);
//    mostrar($fila);

    $regiones = $stmt->fetchAll(PDO::FETCH_ASSOC);
//    mostrar($regiones);

?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="../css/estilos.css">
        <title>Document</title>
    </head>
    <body>

            <ul>
<?php
            foreach ( $regiones as $region ){
?>
                <li><?= $region['regNombre']; ?></li>
<?php
            }
?>
            </ul>

    </body>
</html>
