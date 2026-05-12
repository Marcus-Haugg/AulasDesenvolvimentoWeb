<?php
require_once __DIR__ . '/../controller/CursoController.php';

$controller = new CursoController();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $controller->salvar(); // salva e redireciona para lista.php
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Curso</title>
</head>
<body>

    <h1>Cadastro de Curso</h1>

    <form method="post" action="cadastra.php">
        <label>Nome do Curso</label>
        <input type="text" name="nomecurso" required>

        <label>Carga Horária (em horas)</label>
        <input type="number" name="cargahoraria" min="1" required>

        <label>Categoria</label>
        <input type="text" name="categoria" required>

        <button type="submit">Salvar</button>
    </form>

    <a href="lista.php">Ver cursos cadastrados</a>

</body>
</html>
