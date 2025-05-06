<?php
$p1 = new Produto();
$p1 -> nome = "caneta";
$p1 -> preco = 2.5;
$p1 -> quantidade = 10;

$p2 = new Produto();
$p2 -> nome = "lápis";
$p2 -> preco = 1.0;
$p2 -> quantidade = 20;

$p1 -> exibeinformacoes("caneta", 2.5, 10);
$p2 -> exibeinformacoes("lápis", 1.0, 20);

function mostrarMediaPrecos($p1, $p2) {
    $media = ($p1->preco + $p2->preco) /2;
    echo "A média dos preços é: $media <br>";
}
mostrarMediaPrecos($p1, $p2);
?>