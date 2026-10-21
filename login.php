
<?php

include("conexao.php");

$cpf = $_POST["cpf"];
$senha = $_POST["senha"];

$sql = "SELECT * FROM usuarios
        WHERE cpf='$cpf'
        AND senha='$senha'";

$resultado = $conexao->query($sql);

if ($resultado && $resultado->num_rows > 0) {
    header("Location: menu.html");
    exit;
} else {
    echo "CPF ou senha incorretos.";
}

?>
