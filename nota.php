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


		<label for="nota1">1 Nota:</label>
		<input type="number" name="nota1">

		<label for="nota2">2 Nota:</label>
		<input type="number" name="nota2">

		<label for="nota3">3 Nota:</label>
		<input type="number" name="nota3">


		<button type="submit">Enviar nota</button>
	</form>

	<p><a href="painel.php">Voltar ao painel</a></p>
</body>

</html>
