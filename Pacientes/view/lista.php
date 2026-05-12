<?php
require_once __DIR__ . '/../controller/PacienteController.php';
$controller = new PacienteController();
$pacientes = $controller->listar();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pacientes Cadastrados</title>
</head>
<body>
    <h1>Pacientes Cadastrados</h1>
    <?php if (empty($pacientes)): ?>
        <p>Nenhum paciente cadastrado.</p>
    <?php else: ?>
    <table border="1" cellpadding="8">
        <tr>
            <th>ID</th><th>Nome Completo</th><th>Prontuário</th><th>Tipo Sanguíneo</th>
        </tr>
        <?php foreach ($pacientes as $paciente): ?>
        <tr>
            <td><?= $paciente->getId() ?></td>
            <td><?= htmlspecialchars($paciente->getNome()) ?></td>
            <td><?= htmlspecialchars($paciente->getProntuario()) ?></td>
            <td><?= htmlspecialchars($paciente->getTipoSanguinio()) ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    <a href="cadastra.php">Cadastrar novo paciente</a>
</body>
</html>
