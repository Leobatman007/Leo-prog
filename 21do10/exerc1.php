<?php
// Classe abstrata
abstract class Pessoa {
    protected $nome;
    protected $idade;
    protected $sexo;

    // Construtor
    public function __construct($nome, $idade, $sexo) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->sexo = $sexo;
    }

// Método final
    final public function fazerAniversario() {
        $this->idade += 1;
        echo "Parabéns, {$this->nome}! Agora você tem {$this->idade} anos.<br>";
    }
}
// Não é possível instanciar diretamente a classe Pessoa, pois é abstrata
// $p = new Pessoa("Leo", 25, "M"); // ERRO
?>