<?php
$pares = [];
$i = 1;
while ($i<=50){
    if ($i%2 == 0){
        array_push($pares, $i);
    }
    $i++;
}
$soma = 0;
foreach($pares as $numero){
    $soma += $numero;
    echo "$numero <br>";
}
echo "<hr> $soma";

?>