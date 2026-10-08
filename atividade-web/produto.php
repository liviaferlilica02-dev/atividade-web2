<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produto</title>
    <link rel="stylesheet" href="estilo.css">
</head>

<body>

    <header>

        <h1>Cadastro de Produto</h1>

        <?php
        if (isset($_SESSION["mensagem"])) {
            echo "<div class='mensagem'>" . $_SESSION["mensagem"] . "</div>";
            unset($_SESSION["mensagem"]);
        }
        ?>

        <nav>
            <a href="index.php">Início</a>
            <a href="cliente.php">Cadastrar Cliente</a>
            <a href="consulta_cliente.php">Consultar Clientes</a>
            <a href="produto.php">Cadastrar Produto</a>
            <a href="consulta_produto.php">Consultar Produtos</a>
        </nav>

    </header>

    <main>

        <form action="dados_produto.php" method="POST">

            <label>Nome do produto:</label>
            <input type="text" name="nome" required>

            <label>Quantidade:</label>
            <input type="number" name="quantidade" required>

            <label>Valor de compra:</label>
            <input type="number" step="0.01" name="valor_compra" required>

            <label>Valor de venda:</label>
            <input type="number" step="0.01" name="valor_venda" required>

            <button type="submit">Cadastrar Produto</button>

        </form>

    </main>

</body>

</html>

<?php
session_destroy();
?>