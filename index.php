<?php

require("db_connect.php");
require("function.php");


?>

<!DOCTYPE html>
<html>
<head>
	<title>Registro de Chamados</title>
</head>
<body>
	<form action="./function.php" method="get">
		Insira o número do chamado:
		<br />
		<input type="number" name="id_chamado">
		<br>
		<input type="text" name="franquia">
		<br>
		<input type="date" name="data_chamado">
		<br><br>
		<input type="submit" value="Gravar Chamado">
	</form>
</body>
</html>
