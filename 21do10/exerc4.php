<?php
class Bolsista extends Aluno {
    private $bolsa;

    public function __construct($nome, $idade, $sexo, $matricula, $curso, $bolsa) {
        parent::__construct($nome, $idade, $sexo, $matricula, $curso);
        $this->bolsa = $bolsa;
    }

    public function renovarBolsa() {
        echo "Bolsa renovada com sucesso!<br>";
    }

    // Sobrescrita do método
    public function pagarMensalidade() {
        echo "Mensalidade paga com desconto por {$this->nome}.<br>";
    }
}

// Teste
$b1 = new Bolsista("Leo", 21, "M", 5678, "Engenharia", 50);
$b1->renovarBolsa();
$b1->pagarMensalidade();
?>