<?php

$notas = [$_POST["nota1"],$_POST["nota2"],$_POST["nota3"],$_POST["nota4"]];
$i = 0;
$total = count($notas);
$media = 0;
foreach($notas as $nota){
    $media += $nota;
    $i++;
 if($i == $total){
    $media = $media/$total;
 }
}
echo "A média no aluno foi de $media<br><br>";
if($media >=6){
    echo "Aluno aprovado!";
}else{
    echo "Aluno Reprovado!";
}

?>