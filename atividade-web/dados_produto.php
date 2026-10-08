<?php

session_start();

$banco = new SQLite3("loja.db");

$nome = $_POST["nome"];
$quantidade = $_POST["quantidade"];
$valor_compra = $_POST["valor_compra"];
$valor_venda = $_POST["valor_venda"];

$sql = "INSERT INTO produto
(nome, quantidade, valor_compra, valor_venda)
VALUES
('$nome', '$quantidade', '$valor_compra', '$valor_venda')";

$banco->exec($sql);

$_SESSION["mensagem"] = "Produto cadastrado com sucesso!";

header("Location: produto.php");
exit;

?>