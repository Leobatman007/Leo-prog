<?php 
$p1= new Produto();
$p1 -> nome = " Caneta";
$p1 ->preco = 2.5;
$p1 ->quantidade = 10;

$p2= new Produto();
$p2 -> nome = " Lapis";
$p2 ->preco = 1.0;
$p2 ->quantidade = 20;

$p1 -> exibeInformacoes("Caneta", 2.5,10);
$p2 -> exibeInformacoes("Lapis", 1.0, 20);

function mostrarMedidasPrecos($p1, $p2){
$media = ($p1 ->preco + $p2 -> preco) /2;
echo "A medida dos precos e: $media <br>";
}
mostrarMedidasPrecos($p1, $p2);
?>
