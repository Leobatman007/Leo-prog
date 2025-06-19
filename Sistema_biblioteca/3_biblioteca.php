<?php
class Biblioteca {
    public $nomeBiblioteca;
    private $livros = [];
    private $leitores = [];

    public function __construct($nomeBiblioteca) {
        $this->nomeBiblioteca = $nomeBiblioteca;
    }
    public function adicionarLivro(Livro $livro) {
        $this->livros[] = $livro;
    }
    public function adicionarLeitor(Leitor $leitor) {
        $this->leitores[] = $leitor;
    }
    public function listarLivros() {
        echo "<strong>📚 Livros na Biblioteca '{$this->nomeBiblioteca}':</strong><br>";
        foreach ($this->livros as $livro) {
            $livro->exibirInformacoes();
        }
    }
    public function listarLeitores() {
        echo "<strong>👤 Leitores cadastrados na Biblioteca:</strong><br>";
        foreach ($this->leitores as $leitor) {
            $leitor->exibirLeitor();
        }
    }
}
?>
