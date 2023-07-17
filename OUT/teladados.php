<!DOCTYPE html>
<html>
<head>
	<title>Página do game</title>
	<link rel="stylesheet" href="css/style.css" type="text/css" >
	<style>
		.dado {
			font-size: 25px;
			font-weight: bold;
			color: #555;
			margin: 10px 0;
			padding: 10px;
			background-color: #f5f5f5;
			border-radius: 5px;
			box-shadow: 1px 1px 3px rgba(0,0,0,0.2);
			float: right;
		}
	</style>
</head>
<body onload="window.scrollTo(0,0);">
	<div class="cont">
	<div class="sidebar">
		<form action="" method="post">
			<br>
			<button type="submit" name="roll-dice-4">Jogar o dado D4</button>
		</form>
		<form action="" method="post">
		<br>
			<button type="submit" name="roll-dice-6">Jogar o dado D6</button>
		</form>
		<form action="" method="post">
		<br>	
		<button type="submit" name="roll-dice-8">Jogar o dado D8</button>
		</form>
		<form action="" method="post">
		<br>	
		<button type="submit" name="roll-dice-10">Jogar o dado D10</button>
		</form>
		<form action="" method="post">
		<br>	
		<button type="submit" name="roll-dice-12">Jogar o dado D12</button>
		</form>
		<form action="" method="post">
		<br>	
		<button type="submit" name="roll-dice-20">Jogar o dado D20</button>
		</form>
	</div>
	</div>
	<div class="main-content">
		<h1>Página in the game </h1>
		<?php
			function jogarDado($lados) {
				if (isset($_POST['roll-dice-' . $lados])) {
					$dado = rand(1, $lados);
					echo "<p class='dado'>{$dado}</p>";
				}
			}
			jogarDado(4);
			jogarDado(6);
			jogarDado(8);
			jogarDado(10);
			jogarDado(12);
			jogarDado(20);
		?>
	</div>
</body>
</html>

