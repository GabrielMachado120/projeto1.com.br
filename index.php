<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Cadastro de Usuários</h1>
    <form method="post" action="login.php">

        <label for="user">Usuário:</label> <br>
        <input type="text" name="user"> <br> <br>
        <label for="Senha">Senha:</label> <br>
        <input type="password" name="Senha"> 
        <input type="submit" value="Fazer Login">

    </form>
    <?php
    if (isset($_GET['msg'])) {
            echo "<p style='color:red'>" . htmlspecialchars($_GET['msg']) . "</p>";
    }
    ?>
</body>
</html>