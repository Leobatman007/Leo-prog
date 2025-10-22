<?php

abstract class Veiculo{
    protected $modelo;
    protected $ano;

    public function __construct($modelo, $ano){
        $this->modelo = $modelo;
        $this->ano = $ano;
    }    
    abstract public function mover();
} 
class Carro extends Veiculo{
    public function mover(){
        return "O carro {$this->modelo} do ano {$this->ano} está dirigindo na estrada.";
    }
}
class Bicicleta extends Veiculo{
    public function mover(){
        return "A bicicleta {$this->modelo} do ano {$this->ano} está pedalando no parque.";
    }
}
$carro = new Carro("Opala", 1971);
echo $carro->mover() . "<br>";
$bicicleta = new Bicicleta("Sense", 2018);
echo $bicicleta->mover() . "<br>";

?>