<?php

function RegistrarModel($identificacion, $nombre, $contrasenna)
{
    //Paso 1. Abrir la BD
    $context = mysqli_connect("127.0.0.1:3307","root","","mn_db");

    //Paso 2. Ejecutar la sentencia
    $sp = "CALL sp_Registrar('$identificacion', '$nombre', '$contrasenna')";
    $result = $context -> query($sp);

    //Paso 3. Cerrar la BD
    mysqli_close($context);
    return  $result;
}

function IniciarSesionModel($identificacion, $contrasenna)
{
    //Paso 1. Abrir la BD
    $context = mysqli_connect("127.0.0.1:3307","root","","mn_db");

    //Paso 2. Ejecutar la sentencia
    $sp = "CALL sp_IniciarSesion('$identificacion', '$contrasenna')";
    $result = $context -> query($sp);

    //Paso 3. Cerrar la BD
    mysqli_close($context);
    return  $result;
}