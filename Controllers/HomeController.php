<?php
include_once $_SERVER["DOCUMENT_ROOT"] . "/MN_EJRR/Models/HomeModel.php";

if (session_status() === PHP_SESSION_NONE)
{
    session_start();
}

if (isset($_POST["btnRegistrar"])) {

    $identificacion = $_POST["Identificacion"];
    $nombre = $_POST["Nombre"];
    $correoElectronico = $_POST["CorreoElectronico"];
    $contrasenna = $_POST["Contrasenna"];

    $result = RegistrarModel($identificacion, $nombre, $contrasenna, $correoElectronico);

    if ($result) {
        header("Location: ../../Views/vHome/login.php");
        exit;
    } else {
        $_POST["Mensaje"] = "Su información no fue registrada correctamente";
    }
}

if (isset($_POST["btnIniciarSesion"])) {

    $correoElectronico = $_POST["CorreoElectronico"];
    $contrasenna = $_POST["Contrasenna"];

    $result = IniciarSesionModel($correoElectronico, $contrasenna);

    if ($result) { //es decir que el resultado no es null, lo que significa que la información del usuario fue autenticada correctamente. En este caso, se guarda el nombre del usuario en la variable de sesión "NombreUsuario" y se redirige al usuario a la página de inicio.
        $_SESSION["NombreUsuario"] = $result["Nombre"]; //el procedimiento almacenado sp_IniciarSesion devuelve la información del usuario, incluyendo su nombre, que se guarda en el array $result. Luego, se asigna el valor del nombre del usuario a la variable de sesión "NombreUsuario" para que esté disponible en otras partes de la aplicación.
        header("Location: ../../Views/vHome/inicio.php");
        exit;
    } else {
        $_POST["Mensaje"] = "Su información no fue autenticada correctamente";
    }
}