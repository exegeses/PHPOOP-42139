<?php
    require 'config/config.php';
    require 'clases/Conexion.php';
    require 'clases/Region.php';
    $Region = new Region;
    $chequeo = $Region->modificarRegion();
    include 'includes/over-all-header.html';
    include 'includes/nav.php';
?>

    <main class="container">

        <h1>Alta de una región</h1>
<?php
        $css = 'danger';
        $mensaje = 'No se pudo modificar la región';
        if( $chequeo ){
            $css = 'success';
            $mensaje = 'Región: '.$Region->getRegNombre().' modificada correctamente.';
        }
?>
        <div class="alert alert-<?= $css ?> shadow-sm col-6 mx-auto p-4">
            <?= $mensaje ?>. <br>
            <a href="adminRegiones.php" class="btn btn-outline-secondary">
                volver a panel
            </a>
        </div>

    </main>

<?php
    include 'includes/footer.php';
?>