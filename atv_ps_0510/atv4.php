<?php

$dinheiro = $_POST["dinheiro"];
$nota100 = 0;
$nota50 = 0;
$nota20 = 0;
switch ($dinheiro){
    case ($dinheiro / 100) >= 1:
        while($dinheiro / 100 >= 1){
            $nota100++;
            $dinheiro = $dinheiro - 100;
        }
    case ($dinheiro / 50) >= 1:
        while($dinheiro / 50 >= 1){
            $nota50++;
            $dinheiro = $dinheiro - 50;
        }
    case ($dinheiro / 20) >= 1:
        while($dinheiro / 20 >= 1){
            $nota20++;
            $dinheiro = $dinheiro - 20;
        }
        break;
}
echo "Notas de 100: $nota100 <br>
      Notas de 50: $nota50 <br>
      Notas de 20: $nota20 <br>
      Dinheiro sem sacar: $dinheiro";

?>