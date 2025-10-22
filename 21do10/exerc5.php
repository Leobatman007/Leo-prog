<?php
class Professor extends Pessoa {
    protected $especialidade;
    protected $salario;

    public function __construct($nome, $idade, $sexo, $especialidade, $salario) {
        parent::__construct($nome, $idade, $sexo);
        $this->especialidade = $especialidade;
        $this->salario = $salario;
    }

    public function receberAumento($valor) {
        $this->salario += $valor;
        echo "{$this->nome} recebeu aumento! Novo salário: R$ {$this->salario}<br>";
    }
}

// Teste com vetor de objetos
$objetos = [
    new Aluno("Iza", 20, "F", 1111, "Design"),
    new Aluno("Leo", 22, "M", 2222, "ADS"),
    new Bolsista("Mariazinha", 19, "F", 3333, "Moda", 80),
    new Professor("João", 40, "M", "Matemática", 5000)
];

foreach ($objetos as $obj) {
    echo "<hr>";
    echo "Classe: " . get_class($obj) . "<br>";

    if ($obj instanceof Aluno) {
        $obj->pagarMensalidade();
    }
    if ($obj instanceof Bolsista) {
        $obj->renovarBolsa();
    }
    if ($obj instanceof Professor) {
        $obj->receberAumento(500);
    }
}
?>