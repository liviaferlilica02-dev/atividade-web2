<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Cliente</title>
    <link rel="stylesheet" href="estilo.css">
</head>

<body>

    <header>
        <h1>Cadastro de Cliente</h1>

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

        <form action="dados_cliente.php" method="POST">

            <label>Nome:</label>
            <input type="text" name="nome" required>

            <label>E-mail:</label>
            <input type="email" name="email" required>

            <label>Telefone:</label>
            <input type="text" name="telefone" required>

            <label>Rua:</label>
            <input type="text" name="rua" required>

            <label>Número:</label>
            <input type="text" name="numero" required>

            <label>Complemento:</label>
            <input type="text" name="complemento">

            <label>Bairro:</label>
            <input type="text" name="bairro" required>

            <label>Cidade:</label>
            <input type="text" name="cidade" required>

            <label>Estado:</label>
            <input type="text" name="estado" required>

            <button type="submit">Cadastrar Cliente</button>

        </form>

    </main>

</body>

</html>

<?php
session_destroy();
?>