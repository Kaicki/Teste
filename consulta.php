<!-- consulta.php -->
<?php
require "verifyCPF.php";

$cpf = $_POST["cpf"] ?? "";

if (!verifyCPF($cpf)) {
    die("CPF inválido!");
}

header("Location: resultado.html?cpf=" . urlencode($cpf));
exit;
?>
