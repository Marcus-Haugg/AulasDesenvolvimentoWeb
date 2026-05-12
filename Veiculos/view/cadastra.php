<?php
require_once __DIR__ . '/../controller/VeiculoController.php';
$controller = new VeiculoController();
if ($_SERVER['REQUEST_METHOD'] === 'POST') { $controller->salvar(); }
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Veículo</title>
</head>
<body>
    <h1>Cadastro de Veículo</h1>
    <form method="post" action="cadastra.php">
        <label>Placa</label>
        <input type="text" name="placa" required>
        <label>Modelo</label>
        <input type="text" name="modelo" required>
        <label>Marca</label>
        <input type="text" name="marca" required>
        <button type="submit">Salvar</button>
    </form>
    <a href="lista.php">Ver veículos cadastrados</a>
</body>
</html>
