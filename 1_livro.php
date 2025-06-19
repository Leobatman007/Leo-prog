<?php
class Livro {
    private $titulo;
    private $autor;
    private $anoPublicacao;
    private $disponivel;
  
    public function __construct($titulo, $autor, $anoPublicacao, $disponivel) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->anoPublicacao = $anoPublicacao;
        $this->disponivel = $disponivel;
    }
    public function getTitulo() {
        return $this->titulo;
    }
    public function getAutor() {
        return $this->autor;
    }

    public function getAnoPublicacao() {
        return $this->anoPublicacao;
    }

    public function getDisponivel() {
        return $this->disponivel;
    }
    public function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    public function setAutor($autor) {
        $this->autor = $autor;
    }
    public function setAnoPublicacao($anoPublicacao) {
        $this->anoPublicacao = $anoPublicacao;
    }
    public function setDisponivel($disponivel) {
        $this->disponivel = $disponivel;
    }
    public function exibirInformacoes() {
        $status = $this->disponivel ? "Disponível" : "Indisponível";
        echo "Título: " . $this->titulo . "<br>";
        echo "Autor: " . $this->autor . "<br>";
        echo "Ano de Publicação: " . $this->anoPublicacao . "<br>";
        echo "Status: " . $status . "<br>";
   }
    public function emprestar() {
        if ($this->disponivel) {
            $this->disponivel = false;
            echo "O livro '{$this->titulo}' foi emprestado com sucesso.<br>";
        } else {
            echo "O livro '{$this->titulo}' já está emprestado.<br>";
        }
    }
    public function devolver() {
        if (!$this->disponivel) {
            $this->disponivel = true;
            echo "O livro '{$this->titulo}' foi devolvido com sucesso.<br>";
        } else {
            echo "O livro '{$this->titulo}' já está disponível.<br>";
        }
    }
    public function estaDisponivel() {
        return $this->disponivel
            ? "O livro '{$this->titulo}' está disponível para empréstimo.<br>"
            : "O livro '{$this->titulo}' não está disponível no momento.<br>";
    }
}
?>
