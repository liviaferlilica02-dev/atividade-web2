<?php

$banco = new SQLite3("loja.db");

$sql = "SELECT nome, email, telefone, cidade FROM cliente";

$resultado = $banco->query($sql);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes Cadastrados</title>
    <link rel="stylesheet" href="estilo.css">
</head>

<body>

    <header>

        <h1>Clientes Cadastrados</h1>

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
                <th>E-mail</th>
                <th>Telefone</th>
                <th>Cidade</th>
            </tr>

            <?php

            while ($cliente = $resultado->fetchArray(SQLITE3_ASSOC)) {

                echo "<tr>";

                echo "<td>" . htmlspecialchars($cliente["nome"]) . "</td>";
                echo "<td>" . htmlspecialchars($cliente["email"]) . "</td>";
                echo "<td>" . htmlspecialchars($cliente["telefone"]) . "</td>";
                echo "<td>" . htmlspecialchars($cliente["cidade"]) . "</td>";

                echo "</tr>";
            }

            ?>

        </table>

    </main>

</body>

</html>