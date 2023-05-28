<?php
include "conexao.php";
$username = $_POST["username"];
$password = $_POST["password"];
$email = $_POST["email"];

$insert_data = "INSERT INTO usuario VALUES (DEFAULT, '$username', '$email', '$password')";

if (mysqli_query($conn, $insert_data)) {
} else {
    echo "Error" . $insert_data, "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

header('Location: http://localhost//tcc11/telaatributo.php');



?>