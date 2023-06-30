<?php

session_start();

$host = 'localhost';
$user = 'root';
$pass = '';
$name = 'crud';

$conn = new mysqli($host,$user,$pass,$name);

if($conn->connect_error)
{
    die("Error al conectar" . $conn->connect_error);
}

// echo "conexión exitosa";