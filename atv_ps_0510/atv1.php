<?php

//Atividade 1 roupas
$valor = 0;
$tamanho = $_POST["tamanho"];
$roupa = $_POST["roupa"];
switch ($roupa){
    case "camisa":
        $valor = 50;
    break;
    case "calca":
        $valor = 60;
    break;
    case "short":
        $valor = 30;
    break;
    case "Vestido":
        $valor = 90;
    break;
}
    if($tamanho == "g"){
        $valor = $valor*1.10;
    }

echo "<br>A roupa escolhida foi: $roupa <br>
      O tamanho escolhido foi: $tamanho <br>
      O valor total é de: $valor";
?>