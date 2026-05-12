<?php
require_once __DIR__ . '/../controller/ProdutoController.php';
$controller = new ProdutoController();
if ($_SERVER['REQUEST_METHOD'] === 'POST') { $controller->salvar(); }
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produto</title>
</head>
<body>
    <h1>Cadastro de Produto</h1>
    <form method="post" action="cadastra.php">
        <label>Código de Barras</label>
        <input type="text" name="codigoBarras" required>
        <label>Descrição</label>
        <input type="text" name="descricao" required>
        <label>Preço</label>
        <input type="number" step="0.01" name="preco" required>
        <button type="submit">Salvar</button>
    </form>
    <a href="lista.php">Ver produtos cadastrados</a>
</body>
</html>
