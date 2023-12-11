<?php
if (!empty($_POST["btnregistrar"])) {
    if (
        !empty($_POST['nombre']) and !empty($_POST['apellido'])
        and !empty($_POST['ci']) and !empty($_POST['fecha'])
        and !empty($_POST['correo'])
    ) {
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $ci = $_POST['ci'];
        $fecha = $_POST['fecha'];
        $correo = $_POST['correo'];

        $sql = $conexion->query("NSERT INTO persona(nombre, apellidos, ci, fecha_nac, correo) VALUES('$nombre','$apellido', '$ci', '$fecha','$correo')");
        if ($sql == 1) {
            echo '<div class="alert alert-success">Persona registrada</div>';
        } else {
            echo '<div class="alert alert-danger">Error al registrar persona</div>';
        }
    } else {
        echo '<div class="alert alert-warning">Alguno de los campos esta vacio</div>';
    }
}
