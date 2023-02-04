<?php

if (isset($_POST['enviar'])) {
    define('horas_mensais', 200);
    $salarioHora = $_POST['salarioHora'];
    $salario = $salarioHora * horas_mensais;
    $nascimento = $_POST['data'];
    $idade = 2023 - $nascimento;
    $aluguel = $_POST['aluguel'];
    $nome = $_POST['nome'];
    $sobra = $salario - $aluguel;

    echo "Olá $nome, você tem $idade anos, você ganha R$$salario por mês. "
    . "Sabendo que seu aluguel é R$$aluguel, lhe resta R$$sobra";
}
?>
