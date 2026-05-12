<?php
require_once __DIR__ . '/../controller/FuncionarioController.php';
$controller = new FuncionarioController();
if ($_SERVER['REQUEST_METHOD'] === 'POST') { $controller->salvar(); }
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Funcionário</title>
</head>
<body>
    <h1>Cadastro de Funcionário</h1>
    <form method="post" action="cadastra.php">
        <label>Nome</label>
        <input type="text" name="nome" required>
        <label>Salário</label>
        <input type="number" step="0.01" name="salario" required>
        <button type="submit">Salvar</button>
    </form>
    <a href="lista.php">Ver funcionários cadastrados</a>
</body>
</html>
