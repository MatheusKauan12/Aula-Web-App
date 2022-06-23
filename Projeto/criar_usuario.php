<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto </title>
</head>
<body>
    <form action="processa_usuario.php" method="POST">
        <label for="nome"> Nome:</label>
        <input type="text" name="nome"/>
        <label for="email">Email:</label>
        <input type="text" name="email">
        <label for="telefone">Telefone:</label>
        <input type="text" name="telefone"/>
        <label for="cpf">CPF:</label>
        <input type="text" name="cpf"/>
        <input type="submit" value="Salvar"/>
    </form>      
</body>
</html>
