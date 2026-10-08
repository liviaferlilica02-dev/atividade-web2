<?php

$banco = new SQLite3("loja.db");

$sql = "SELECT nome, quantidade, valor_compra, valor_venda FROM produto";

$resultado = $banco->query($sql);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos Cadastrados</title>
    <link rel="stylesheet" href="estilo.css">
</head>

<body>

    <header>

        <h1>Produtos Cadastrados</h1>

        <nav>
            <a href="index.php">Início</a>
            <a href="cliente.php">Cadastrar Cliente</a>
            <a href="consulta_cliente.php">Consultar Clientes</a>
            <a href="produto.php">Cadastrar Produto</a>
            <a href="consulta_produto.php">Consultar Produtos</a>
        </nav>

    </header>

    <main>

        <table>

            <tr>
                <th>Nome</th>
                <th>Quantidade</th>
                <th>Valor de compra</th>
                <th>Valor de venda</th>
            </tr>

            <?php

            while ($produto = $resultado->fetchArray(SQLITE3_ASSOC)) {

                echo "<tr>";

                echo "<td>" . htmlspecialchars($produto["nome"]) . "</td>";
                echo "<td>" . htmlspecialchars($produto["quantidade"]) . "</td>";
                echo "<td>R$ " . number_format($produto["valor_compra"], 2, ",", ".") . "</td>";
                echo "<td>R$ " . number_format($produto["valor_venda"], 2, ",", ".") . "</td>";

                echo "</tr>";
            }

            ?>

        </table>

    </main>

</body>

</html>