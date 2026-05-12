<?php
require_once __DIR__ . '/../controller/FuncionarioController.php';
$controller = new FuncionarioController();
$funcionarios = $controller->listar();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funcionários Cadastrados</title>
</head>
<body>
    <h1>Funcionários Cadastrados</h1>
    <?php if (empty($funcionarios)): ?>
        <p>Nenhum funcionário cadastrado.</p>
    <?php else: ?>
    <table border="1" cellpadding="8">
        <tr>
            <th>ID</th><th>Nome</th><th>Salário</th>
        </tr>
        <?php foreach ($funcionarios as $funcionario): ?>
        <tr>
            <td><?= $funcionario->getId() ?></td>
            <td><?= htmlspecialchars($funcionario->getNome()) ?></td>
            <td>R$ <?= number_format($funcionario->getSalario(), 2, ',', '.') ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    <a href="cadastra.php">Cadastrar novo funcionário</a>
</body>
</html>
