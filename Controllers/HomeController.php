<?php
include_once $_SERVER["DOCUMENT_ROOT"] . "/MN_ECC/Models/HomeModel.php";

if (isset($_POST["btnRegistrar"])) {

    $identificacion = $_POST["Identificacion"];
    $nombre = $_POST["Nombre"];
    $contrasenna = $_POST["Contrasenna"];

    $result = RegistrarModel($identificacion, $nombre, $contrasenna);

    if ($result) {
        header("Location: ../../Views/vHome/login.php");
        exit;
    } else {
        $_POST["Mensaje"] = "Su información no fue registrada correctamente";
    }
}

if (isset($_POST["btnIniciarSesion"])) {

    $identificacion = $_POST["Identificacion"];
    $contrasenna = $_POST["Contrasenna"];

    $result = IniciarSesionModel($identificacion, $contrasenna);

    if ($result) {
        header("Location: ../../Views/vHome/inicio.php");
        exit;
    } else {
        $_POST["Mensaje"] = "Su información no fue autenticada correctamente";
    }
}
