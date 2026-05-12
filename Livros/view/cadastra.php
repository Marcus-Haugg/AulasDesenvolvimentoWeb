<?php
require_once __DIR__ . '/../controller/LivroController.php';
$controller = new LivroController();
if ($_SERVER['REQUEST_METHOD'] === 'POST') { $controller->salvar(); }
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Livro</title>
</head>
<body>
    <h1>Cadastro de Livro</h1>
    <form method="post" action="cadastra.php">
        <label>Título</label>
        <input type="text" name="titulo" required>
        <label>Autor</label>
        <input type="text" name="autor" required>
        <label>ISBN</label>
        <input type="text" name="isbn" required>
        <button type="submit">Salvar</button>
    </form>
    <a href="lista.php">Ver livros cadastrados</a>
</body>
</html>
