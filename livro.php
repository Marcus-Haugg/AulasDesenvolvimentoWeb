<?php

$host = "localhost";
$porta = "5432";
$password = "postgres";
$username = "postgres";
$dbname = "BancoPHP";

$dns = "pgsql:host=$host;port=$porta;dbname=$dbname;user=$username;password=$password";
$conexao = new PDO($dns, $username, $password);


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $titulo = $_POST['titulo'];
    $autor = $_POST['autor'];
    $isbn = $_POST['isbn'];


    $sql = "INSERT INTO livros(titulo, autor, isbn) VALUES (?, ?, ?)";
    $smtm = $conexao->prepare($sql);
    $smtm->execute([$titulo, $autor, $isbn]);

    $sqlListagem = "SELECT * FROM livros";
    $resultado = $conexao->query($sqlListagem);
    $livros = $resultado->fetchAll(PDO::FETCH_ASSOC);
    include('livro.html');

}



?>