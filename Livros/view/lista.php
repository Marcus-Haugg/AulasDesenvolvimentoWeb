<?php
require_once __DIR__ . '/../controller/LivroController.php';
$controller = new LivroController();
$livros = $controller->listar();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livros Cadastrados</title>
</head>
<body>
    <h1>Livros Cadastrados</h1>
    <?php if (empty($livros)): ?>
        <p>Nenhum livro cadastrado.</p>
    <?php else: ?>
    <table border="1" cellpadding="8">
        <tr>
            <th>ID</th><th>Título</th><th>Autor</th><th>ISBN</th>
        </tr>
        <?php foreach ($livros as $livro): ?>
        <tr>
            <td><?= $livro->getId() ?></td>
            <td><?= htmlspecialchars($livro->getTitulo()) ?></td>
            <td><?= htmlspecialchars($livro->getAutor()) ?></td>
            <td><?= htmlspecialchars($livro->getIsbn()) ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    <a href="cadastra.php">Cadastrar novo livro</a>
</body>
</html>
