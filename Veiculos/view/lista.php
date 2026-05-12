<?php
require_once __DIR__ . '/../controller/VeiculoController.php';
$controller = new VeiculoController();
$veiculos = $controller->listar();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Veículos Cadastrados</title>
</head>
<body>
    <h1>Veículos Cadastrados</h1>
    <?php if (empty($veiculos)): ?>
        <p>Nenhum veículo cadastrado.</p>
    <?php else: ?>
    <table border="1" cellpadding="8">
        <tr>
            <th>ID</th><th>Placa</th><th>Modelo</th><th>Marca</th>
        </tr>
        <?php foreach ($veiculos as $veiculo): ?>
        <tr>
            <td><?= $veiculo->getId() ?></td>
            <td><?= htmlspecialchars($veiculo->getPlaca()) ?></td>
            <td><?= htmlspecialchars($veiculo->getModelo()) ?></td>
            <td><?= htmlspecialchars($veiculo->getMarca()) ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    <a href="cadastra.php">Cadastrar novo veículo</a>
</body>
</html>
