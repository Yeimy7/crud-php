<?php
if (!empty($_POST["btnmodificar"])) {
    if (
        !empty($_POST['nombre']) and !empty($_POST['apellido'])
        and !empty($_POST['ci']) and !empty($_POST['fecha'])
        and !empty($_POST['correo'])
    ) {
        $id = $_POST['id'];
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $ci = $_POST['ci'];
        $fecha = $_POST['fecha'];
        $correo = $_POST['correo'];

        $sql = $conexion->query("UPDATE persona SET nombre='$nombre', apellidos='$apellido', ci='$ci', fecha_nac='$fecha', correo='$correo' WHERE id=$id");
        if ($sql == 1) {
            header("location:index.php");
        } else {
            echo '<div class="alert alert-danger">Error al modificar persona</div>';
        }
    } else {
        echo '<div class="alert alert-warning">Alguno de los campos esta vacio</div>';
    }
}
