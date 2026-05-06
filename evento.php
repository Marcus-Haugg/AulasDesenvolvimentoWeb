<?php

$host = "localhost";
$porta = "5432";
$password = "postgres";
$username = "postgres";
$dbname = "BancoPHP";

$dns = "pgsql:host=$host;port=$porta;dbname=$dbname;user=$username;password=$password";
$conexao = new PDO($dns, $username, $password);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nomeevento = $_POST['nomeevento'];
    $data = $_POST['data'];
    $local = $_POST['local'];

    $sql = "INSERT INTO eventos(nomeevento, data, local) VALUES (?, ?, ?)";
    $smtm = $conexao->prepare($sql);
    $smtm->execute([$nomeevento, $data, $local]);

    $sqlListagem = "SELECT * FROM eventos ORDER BY data ASC";
    $resultado = $conexao->query($sqlListagem);
    $eventos = $resultado->fetchAll(PDO::FETCH_ASSOC);
    include('evento.html');
}

?>
