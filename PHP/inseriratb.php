<?php
include "conexao.php";

$email = $_POST['email'];
$senha = $_POST['senha'];

 $query_select="SELECT fome,malicia,sorte FROM habilidades WHERE email='$email' AND senha='$senha'";
 $select = mysqli_query($conn, $query_select);

if (($select) && ($select->num_rows != 0)) {
    while ($rows = mysqli_fetch_array($select)) {
        $detect_email = $rows['email'];
        $detect_senha = $rows['senha'];

        if (($detect_email == $email) && ($detect_senha == $senha)) {
            $fome = $rows['fome'];
            $malicia = $rows['malicia'];
            $sorte = $rows['sorte']; 
            echo "lindo";
        }
    }
}

if (($detect_email != $email) || ($detect_senha != $senha)) {
    // header('Location: https://www.youtube.com')
    echo "feio";
}