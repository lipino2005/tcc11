
<?php
include "conexao.php";

if(isset($_POST['email']) && isset($_POST['senha'])) {
    $vida = $_POST['vida'];
    $mana = $_POST['mana'];
    $esquiva = $_POST['esquiva'];
    $sorte = $_POST['sorte'];
    $inteligencia = $_POST['inteligencia'];
    $malicia = $_POST['malicia'];
    $socorros = $_POST['socorros'];
    $velocidade = $_POST['velocidade'];
    $conhecimento = $_POST['conhecimento'];
    $armas = $_POST['armas'];
    $arremesso = $_POST['arremesso'];


    $query_select = "SELECT * FROM `usuario` WHERE `vida` = ? AND `mana` = ?";
    $stmt = $conn->prepare($query_select);
    $stmt->bind_param('ss', $email, $senha);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows != 0) {
        echo '<script> alert("Usuário existente"); window.location.href="http://localhost/tcc11/telaatributo.php" </script>';
    } else {
        echo '<script> var e = confirm("Usuário inexistente. Clique em OK para efetuar o cadastro."); 
        if(e == true) {
            window.location.href="http://localhost/tcc11/telacadloginsenha.php";
        } else {
            window.location.href="http://localhost/tcc11/telaloginsenha.php";
        } </script>';
    }
} else {
    echo '<script> alert("Por favor, preencha todos os campos."); window.location.href="http://localhost/tcc11/telaloginsenha.php" </script>';
}
?>