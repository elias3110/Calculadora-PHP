<?php

$operaçao=$_POST['operação'];
$numero_1=$_POST['numero1'];
$numero_2=$_POST['numero2'];

$operação_adicao = "Adição";
$operação_subtracao = "Subtração";
$operação_divisao = "Divisão";
$operação_multiplicacao = "Multiplicação";

$adicao = $numero_1 + $numero_2;
$subtracao = $numero_1 - $numero_2;
$divisao = $numero_1 / $numero_2;
$multiplicacao = $numero_1 * $numero_2;


if ($operaçao == $operação_adicao)
    echo "O resultado desta adição é $adicao";
else if ($operaçao == $operação_subtracao)
    echo "O resultado desta subtração é $subtracao";
else if ($operaçao == $operação_divisao)
    echo "O resultado desta divisão é $divisao";
else
    echo "O resultado desta multiplicação é $multiplicacao";

?>