<?php

session_start();

$banco = new SQLite3("loja.db");

$nome = $_POST["nome"];
$email = $_POST["email"];
$telefone = $_POST["telefone"];
$rua = $_POST["rua"];
$numero = $_POST["numero"];
$complemento = $_POST["complemento"];
$bairro = $_POST["bairro"];
$cidade = $_POST["cidade"];
$estado = $_POST["estado"];

$sql = "INSERT INTO cliente
(nome, email, telefone, rua, numero, complemento, bairro, cidade, estado)
VALUES
('$nome', '$email', '$telefone', '$rua', '$numero', '$complemento', '$bairro', '$cidade', '$estado')";

$banco->exec($sql);

$_SESSION["mensagem"] = "Cliente cadastrado com sucesso!";

header("Location: cliente.php");
exit;

?>