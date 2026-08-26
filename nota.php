<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<title>Cadastrar nota</title>
</head>
<body>
	<h1>Cadastrar nota</h1>

	<form action="calculo_nota.php" method="post">
		<label for="disciplina">Disciplina:</label>
		<input type="text" id="disciplina" name="disciplina" required>

		<label for="nota">Nota:</label>
		<input type="number" id="nota" name="nota" required>

		<button type="submit">Enviar nota</button>
	</form>

	<p><a href="painel.php">Voltar ao painel</a></p>
</body>
</html>
