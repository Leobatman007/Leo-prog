<?php
class Aluno extends Pessoa {
    protected $matricula;
    protected $curso;

    public function __construct($nome, $idade, $sexo, $matricula, $curso) {
        parent::__construct($nome, $idade, $sexo);
        $this->matricula = $matricula;
        $this->curso = $curso;
    }

    public function pagarMensalidade() {
        echo "Mensalidade paga com sucesso por {$this->nome}!<br>";
    }
}

// Teste
$a1 = new Aluno("Leo", 19, "F", 1234, "Informática");
$a1->pagarMensalidade();
$a1->fazerAniversario();
?>