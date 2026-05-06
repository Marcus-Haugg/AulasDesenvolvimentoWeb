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
    $salario = $_POST['salario'];


    $sql = "INSERT INTO funcionarios(nome, salario) VALUES (?, ?)";
    $smtm = $conexao->prepare($sql);
    $smtm->execute([$nome, $salario]);

    if ($smtm->rowCount() > 0) {
        echo "<h1>Dados salvos com sucesso!</h1>";
        echo "<a href='funcionario.html'>Voltar</a>";
    } else {
        echo "<h1>Erro ao salvar dados!</h1>";
        echo "<a href='funcionario.html'>Voltar</a>";
    }


}



?>