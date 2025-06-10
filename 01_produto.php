<?php
class Produto{
    //Atributos
    public $nome;
    public $preco;
    public $quantidade;

    public function exibeinformacoes(){
        echo "<strong>Nome: </strong>$this->nome, <strong>Preço: </strong>$this->preco, <strong>Quantidade: </strong>$this->quantidade <br>";
    }
}
?>
