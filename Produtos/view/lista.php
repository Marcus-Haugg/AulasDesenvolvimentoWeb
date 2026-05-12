<?php
require_once __DIR__ . '/../controller/ProdutoController.php';
$controller = new ProdutoController();
$produtos = $controller->listar();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos Cadastrados</title>
</head>
<body>
    <h1>Produtos Cadastrados</h1>
    <?php if (empty($produtos)): ?>
        <p>Nenhum produto cadastrado.</p>
    <?php else: ?>
    <table border="1" cellpadding="8">
        <tr>
            <th>ID</th><th>Código de Barras</th><th>Descrição</th><th>Preço</th>
        </tr>
        <?php foreach ($produtos as $produto): ?>
        <tr>
            <td><?= $produto->getId() ?></td>
            <td><?= htmlspecialchars($produto->getCodigoBarras()) ?></td>
            <td><?= htmlspecialchars($produto->getDescricao()) ?></td>
            <td>R$ <?= number_format($produto->getPreco(), 2, ',', '.') ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    <a href="cadastra.php">Cadastrar novo produto</a>
</body>
</html>
