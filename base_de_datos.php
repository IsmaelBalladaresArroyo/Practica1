<?php
$contraseña = "sYIh7bF1Ap3qESWlVMzY";
$usuario = "postgres";
$nombreBaseDeDatos = "railway";
$rutaServidor = "containers-us-west-24.railway.app";
$puerto = "6662";

try{
    $base_de_datos = new PDO("pgsql: host = $rutaServidor;port=$puerto;dbname=$nombreBaseDeDatos", $usuario, $contraseña);
    $base_de_datos->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(Exception $e){
    echo "Ocurrio un error con la base de datos: " . $e->getMessage();
}