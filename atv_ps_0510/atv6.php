<?php

$salarios = ["funcionario1" => $_POST["salario1"],"funcionario2" => $_POST["salario2"],"funcionario3" => $_POST["salario3"],"funcionario4" => $_POST["salario4"],"funcionario5" => $_POST["salario5"]];

foreach($salarios as $funcionario => $salario){
    echo "$funcionario tem o salario de $salario<br>";
    if ($salario < 2000){
        $salario = $salario * 1.10;
        $salarios[$funcionario] = $salario;
        echo "Seu novo salario é de: $salario";
    }
    echo "<hr>";
}

?>