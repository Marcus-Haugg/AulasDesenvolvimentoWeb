<?php
require_once __DIR__ . '/../controller/CursoController.php';

$controller = new CursoController();
$cursos = $controller->listar(); // busca todos os cursos do banco
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cursos Cadastrados</title>
</head>
<body>

    <h1>Cursos Cadastrados</h1>

    <?php if (empty($cursos)): ?>
        <p>Nenhum curso cadastrado.</p>
    <?php else: ?>
    <table border="1" cellpadding="8">
        <tr>
            <th>ID</th>
            <th>Nome do Curso</th>
            <th>Carga Horária</th>
            <th>Categoria</th>
        </tr>
        <?php foreach ($cursos as $curso): ?>
        <tr>
            <td><?= $curso->getId() ?></td>
            <td><?= htmlspecialchars($curso->getNomeCurso()) ?></td>
            <td><?= $curso->getCargaHoraria() ?>h</td>
            <td><?= htmlspecialchars($curso->getCategoria()) ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
    <?php endif; ?>

    <a href="cadastra.php">Cadastrar novo curso</a>

</body>
</html>
