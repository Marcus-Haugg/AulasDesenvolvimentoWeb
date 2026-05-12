<?php
require_once __DIR__ . '/../controller/EventoController.php';
$controller = new EventoController();
if ($_SERVER['REQUEST_METHOD'] === 'POST') { $controller->salvar(); }
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Evento</title>
</head>
<body>
    <h1>Cadastro de Evento</h1>
    <form method="post" action="cadastra.php">
        <label>Nome do Evento</label>
        <input type="text" name="nomeevento" required>
        <label>Data</label>
        <input type="date" name="data" required>
        <label>Local</label>
        <input type="text" name="local" required>
        <button type="submit">Salvar</button>
    </form>
    <a href="lista.php">Ver eventos cadastrados</a>
</body>
</html>
