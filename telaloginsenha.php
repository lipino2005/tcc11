<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">

</head>
<body>
	<div class="container">
		<h1>Login</h1>
	<form>
		<fieldset id="login"><legend>login</legend>
			<label for="loginm">Mestre</label><input type="radio" name="Clogin" id="loginm"/>
			<label for="loginj">Jogador</label><input type="radio" name="Clogin" id="loginj"/>
	</form>
		
	<form method="POST" action="PHP/selecaologin.php">
		<label for="email">Email:</label>
		<input type="email" name="email" required autocomplete="off">

		<label for="senha">Senha:</label>
        <input type="password" name="senha" required autocomplete="off">

		<button type="submit" href="http://localhost//tcc11/telacadloginsenha.php">Entrar</button>
		<a href="http://localhost//tcc11/telacadloginsenha.php">criar cadrastro</a>
	</form>
</body>
</html>