<?php
class Visitante extends Pessoa {
    // Nenhum atributo ou método novo (herança de implementação)
}

// Teste
$v1 = new Visitante("Carlos", 30, "M");
$v1->fazerAniversario();
?>