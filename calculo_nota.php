<?php
    $disciplina = $_POST['disciplina'];
    $n1 = $_POST['nota1'];
    $n2 = $_POST['nota2'];
	$n3 = $_POST['nota3'];
    $media = ($n1 + $n2 + $n3) / 3;

    if ($media < 5) {
        echo("Você está reprovado em: " . $disciplina);
    } else if ($media <= 6) {
        echo("Você está de recuperação em: " . $disciplina);
    } else {
        echo("Você foi aprovado em: " . $disciplina . " Parabens!");
    }
?>