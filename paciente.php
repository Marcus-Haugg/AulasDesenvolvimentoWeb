<?php

$host = "localhost";
$porta = "5432";
$password = "postgres";
$username = "postgres";
$dbname = "BancoPHP";

$dns = "pgsql:host=$host;port=$porta;dbname=$dbname;user=$username;password=$password";
$conexao = new PDO($dns, $username, $password);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $prontuario = $_POST['prontuario'];
    $tiposanguinio = $_POST['tiposanguinio'];

    $sql = "INSERT INTO pacientes(nome, prontuario, tiposanguinio) VALUES (?, ?, ?)";
    $smtm = $conexao->prepare($sql);
    $smtm->execute([$nome, $prontuario, $tiposanguinio]);

    $sqlListagem = "SELECT * FROM pacientes";
    $resultado = $conexao->query($sqlListagem);
    $pacientes = $resultado->fetchAll(PDO::FETCH_ASSOC);
    include('paciente.html');
}

?>
