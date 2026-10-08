<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minha Loja</title>
    <link rel="stylesheet" href="estilo.css">
</head>

<body>

    <header>

        <h1>Minha Loja</h1>

        <p>Bem-vindo ao sistema da loja!</p>

        <nav>
            <a href="index.php">Início</a>
            <a href="cliente.php">Cadastrar Cliente</a>
            <a href="consulta_cliente.php">Consultar Clientes</a>
            <a href="produto.php">Cadastrar Produto</a>
            <a href="consulta_produto.php">Consultar Produtos</a>
        </nav>

    </header>

    <main>

        <h2>Menu</h2>

        <div class="cards">

            <a href="cliente.php" class="card">
                👤
                <strong>Cadastrar Cliente</strong>
            </a>

            <a href="consulta_cliente.php" class="card">
                📋
                <strong>Consultar Clientes</strong>
            </a>

            <a href="produto.php" class="card">
                📦
                <strong>Cadastrar Produto</strong>
            </a>

            <a href="consulta_produto.php" class="card">
                🛒
                <strong>Consultar Produtos</strong>
            </a>

        </div>

    </main>

</body>

</html>