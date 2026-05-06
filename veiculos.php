<?php

$host = "localhost";
$porta = "5432";
$password = "postgres";
$username = "postgres";
$dbname = "BancoPHP";

$dns = "pgsql:host=$host;port=$porta;dbname=$dbname;user=$username;password=$password";
$conexao = new PDO($dns, $username, $password);


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $placa = $_POST['placa'];
    $modelo = $_POST['modelo'];
    $marca = $_POST['marca'];



    $sql = "INSERT INTO veiculos(placa, modelo, marca) VALUES (?, ?, ?)";
    $smtm = $conexao->prepare($sql);
    $smtm->execute([$placa, $modelo, $marca]);

    $sqlListagem = "SELECT * FROM   veiculos";
    $resultado = $conexao->query($sqlListagem);
    $veiculos = $resultado->fetchAll(PDO::FETCH_ASSOC);
    include('veiculos.html');

}



?>