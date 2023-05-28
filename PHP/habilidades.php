<?php
include "conexao.php";

$fome= $_POST["fome"];
$sorte = $_POST["sorte"];
$malicia = $_POST["malicia"];
$condicao = false;

$sql = "INSERT INTO habilidades VALUES (DEFAULT, '$fome', '$sorte', '$malicia')";

if (mysqli_query($conn, $sql)) {
} else {
  echo "Erro ao cadastrar: " . mysqli_error($conn);
}
mysqli_close($conn);

// header("Location: http://localhost//tcc11/teladados.php")


?>

