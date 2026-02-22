<?php
include_once $_SERVER["DOCUMENT_ROOT"] . "/MN_EJRR/Models/UtilitarioModel.php";

function RegistrarModel($identificacion, $nombre, $contrasenna, $correoElectroncio)
{
    $context = OpenDatabase();

    $sp = "CALL sp_Registrar('$identificacion', '$nombre', '$contrasenna', '$correoElectroncio')";
    $result = $context -> query($sp);

    CloseDatabase($context);
    return $result;
}

function IniciarSesionModel($correoElectronico, $contrasenna)
{
    $context = OpenDatabase();

    $sp = "CALL sp_IniciarSesion('$correoElectronico', '$contrasenna')";
    $result = $context -> query($sp);

    $datos = null;// Si el resultado es correcto, se obtiene la información del usuario, se guarda en un array llamdado datosy se retorna. Si el resultado es incorrecto, se retorna null. Ahorita es null xq esperamos un solo resultado si no seria un array
    while($fila = $result -> fetch_assoc())
    {
        $datos = $fila;  //datos es un array que contiene la información del usuario, como su identificacion, nombre, correo electrónico, etc. Si el resultado es correcto, se obtiene la información del usuario y se guarda en el array $datos. Si el resultado es incorrecto, $datos seguirá siendo null.
    }

    CloseDatabase($context);
    return $datos;
}