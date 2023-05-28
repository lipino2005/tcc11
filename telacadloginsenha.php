<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Formulário de Cadastro</title>
    <link rel="stylesheet" href="css/jonas.css" type="text/css">
</head>

<body>
    <form method="POST" action="./PHP/inserirdados.php">
        <label for="username"> Usuário: </label>
        <input type="text" id="username" name="username"><br>

        <label for="password"> Senha: </label>
        <input type="password" id="password" name="password"><br>

        <label for="email"> E-mail: </label>
        <input type="email" id="email" name="email"><br>

        <input type="submit" value="Cadastrar">
    </form>
</body>

</html>