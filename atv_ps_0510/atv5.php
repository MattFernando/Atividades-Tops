<?php

$compras = ["camisas" => $_POST["camisas"], "calças" => $_POST["calcas"], "tenis" => $_POST["tenis"], "vestido" => $_POST["vestido"], "luvas" => $_POST["luvas"]];
foreach($compras as $produto => $valor){
    if($valor == ""){
        $valor = 0;
        $compras[$produto] = $valor;
    }
 if($produto == "camisas"){
    $valorcamisa = 50 * $valor;
 }
 if($produto == "calças"){
    $valorcalca = 40 * $valor;
 }
 if($produto == "tenis"){
    $valortenis = 90 * $valor;
 }
 if($produto == "vestido"){
    $valorvestido = 60 * $valor;
 }
 if($produto == "luvas"){
    $valorluvas = 10 * $valor;
 }
}
$valortotal = $valorcamisa + $valorcalca + $valortenis + $valorvestido + $valorluvas; 
echo "<h2> Obrigado pela compra!</h2> <br><br>
      <hr>
      Quantidade de Camisas ". $compras["camisas"] . "...................... $valorcamisa<br><br>
      Quantidade de Calças ". $compras["calças"] . "...................... $valorcalca<br><br>
      Quantidade de Tenis ". $compras["tenis"] . "...................... $valortenis<br><br>
      Quantidade de Vestido ". $compras["vestido"] . "...................... $valorvestido<br><br>
      Quantidade de Luvas ". $compras["luvas"] . "...................... $valorluvas<br><br>
      <hr>
      <h3>Total ......................................................... $valortotal </h3>";
?>