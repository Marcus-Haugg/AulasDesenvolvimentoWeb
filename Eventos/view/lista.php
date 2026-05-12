<?php
require_once __DIR__ . '/../controller/EventoController.php';
$controller = new EventoController();
$eventos = $controller->listar();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eventos Cadastrados</title>
</head>
<body>
    <h1>Eventos Cadastrados</h1>
    <?php if (empty($eventos)): ?>
        <p>Nenhum evento cadastrado.</p>
    <?php else: ?>
    <table border="1" cellpadding="8">
        <tr>
            <th>ID</th><th>Nome do Evento</th><th>Data</th><th>Local</th>
        </tr>
        <?php foreach ($eventos as $evento): ?>
        <tr>
            <td><?= $evento->getId() ?></td>
            <td><?= htmlspecialchars($evento->getNomeEvento()) ?></td>
            <td><?= htmlspecialchars($evento->getData()) ?></td>
            <td><?= htmlspecialchars($evento->getLocal()) ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    <a href="cadastra.php">Cadastrar novo evento</a>
</body>
</html>
