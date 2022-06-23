<?php
require 'Banco.php';

if(!empty($_POST)){
    $nome = $_POST ['nome'];
    $cpf = $_POST ['cpf'];
    $telefone =$_POST ['telefone'];
    $email = $_POST['email'];

    $pdo = Banco::conectar();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO clientes(nome, cpf, telefone, email) VALUES (?, ?, ?, ?)";
    $q = $pdo->prepare($sql);
    $q->execute(array($nome, $cpf, $telefone, $email));
    Banco::desconectar();
    header("Location: criar_usuario.php");
}
?>