<?php
$disciplina = trim($_POST['disciplina'] ?? '');
$nota = filter_input(INPUT_POST, 'nota', FILTER_VALIDATE_FLOAT);

if ($_SERVER['REQUEST_METHOD'] !== 'POST' || $disciplina === '' || $nota === false || $nota < 0 || $nota > 10) {
	http_response_code(400);
	exit('Informe uma disciplina e uma nota entre 0 e 10.');
}

$disciplinaEscapada = htmlspecialchars($disciplina, ENT_QUOTES, 'UTF-8');
$notaFormatada = number_format($nota, 2, ',', '.');
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<title>Nota recebida</title>
</head>
<body>
	<h1>Nota recebida</h1>
	<p>Disciplina: <?= $disciplinaEscapada ?></p>
	<p>Nota: <?= $notaFormatada ?></p>

	<p><a href="nota.php">Cadastrar outra nota</a></p>
</body>
</html>
