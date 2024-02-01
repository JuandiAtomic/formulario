<?php

include("conexion.php");

if (isset($_POST['register'])) {
    if (
        strlen($_POST['name']) >= 1 &&
        strlen($_POST['lastname']) >= 1 &&
        strlen($_POST['email']) >= 1 &&
        strlen($_POST['password']) >= 1
    ) {
        $name = trim($_POST['name']);
        $lastname = trim($_POST['lastname']);
        $email = trim($_POST['email']);
        $password = trim($_POST['password']);
        $fecha = date("d/m/y");
        $consulta = "INSERT INTO datos(name,lastname,email,password,fecha)
                     VALUES('$name', '$lastname', '$email', '$password', '$fecha');";

        $resultado = mysqli_query($conex, $consulta);

        if ($resultado) {
            ?>
            <h3 class="success">Tu registro se ha Completado</h3>
            <?php
        } else {
            ?>
            <h3 class="error">Ha ocurrido un Error</h3>
            <?php
        }
    } else {
        ?>
        <h3 class="error">Llena todos los campos!</h3>
        <?php
    }
}

?>
