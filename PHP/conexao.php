<?php

$hostname = "localhost";
$bancodados = "calculador";
$usuario = "root";
$senha = "";

$conn = mysqli_connect($hostname, $usuario, $senha, $bancodados);

if (!$conn) {
  die ("error" . mysqli_connect_erro($conn));
} else {
}
