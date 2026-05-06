<?php

$host = "localhost";
$porta = "5432";
$password = "postgres";
$username = "postgres";
$dbname = "BancoPHP";

$dns = "pgsql:host=$host;port=$porta;dbname=$dbname;user=$username;password=$password";
$conexao = new PDO($dns, $username, $password);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nomecurso = $_POST['nomecurso'];
    $cargahoraria = $_POST['cargahoraria'];
    $categoria = $_POST['categoria'];

    $sql = "INSERT INTO cursos(nomecurso, cargahoraria, categoria) VALUES (?, ?, ?)";
    $smtm = $conexao->prepare($sql);
    $smtm->execute([$nomecurso, $cargahoraria, $categoria]);

    $sqlListagem = "SELECT * FROM cursos";
    $resultado = $conexao->query($sqlListagem);
    $cursos = $resultado->fetchAll(PDO::FETCH_ASSOC);
    include('curso.html');
}

?>
