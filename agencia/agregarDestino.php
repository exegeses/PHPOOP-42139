<?php
    require 'config/config.php';
    require 'clases/Conexion.php';
    require 'clases/Destino.php';
    $Destino = new Destino;
    $chequeo = $Destino->agregarDestino();
    include 'includes/over-all-header.html';
    include 'includes/nav.php';
?>

    <main class="container">

        <h1>Alta de un destino</h1>
<?php
        $css = 'danger';
        $mensaje = 'No se pudo agregar el destino';
        if( $chequeo ){
            $css = 'success';
            $mensaje = 'Destino: '.$Destino->getDestNombre().' agregado correctamente.';
        }
?>
            <div class="alert alert-<?= $css ?> shadow-sm col-6 mx-auto p-4">
                    <?= $mensaje ?>. <br>
                <a href="adminDestinos.php" class="btn btn-outline-secondary">
                    volver a panel
                </a>
            </div>

    </main>

<?php
    include 'includes/footer.php';
?>