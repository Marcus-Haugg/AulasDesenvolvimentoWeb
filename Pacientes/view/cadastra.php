<?php
require_once __DIR__ . '/../controller/PacienteController.php';
$controller = new PacienteController();
if ($_SERVER['REQUEST_METHOD'] === 'POST') { $controller->salvar(); }
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Paciente</title>
</head>
<body>
    <h1>Cadastro de Paciente</h1>
    <form method="post" action="cadastra.php">
        <label>Nome Completo</label>
        <input type="text" name="nome" required>
        <label>Número do Prontuário</label>
        <input type="text" name="prontuario" required>
        <label>Tipo Sanguíneo</label>
        <input type="text" name="tiposanguinio" required>
        <button type="submit">Salvar</button>
    </form>
    <a href="lista.php">Ver pacientes cadastrados</a>
</body>
</html>
