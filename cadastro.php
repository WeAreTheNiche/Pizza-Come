<?php

include("conexao.php");

$nome = $_POST["nome"];
$cpf = $_POST["cpf"];
$senha = $_POST["senha"];
$nasc = $_POST["nasc"];

$sql = "INSERT INTO usuarios (nome, cpf, senha, nasc)
        VALUES ('$nome', '$cpf', '$senha' '$nasc')";

if ($conexao->query($sql)) {
    header("Location: menu.html");
    exit();
} else {
    echo "Erro ao cadastrar.";
}

?>