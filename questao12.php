<?php

class Pato {
    private $nome;
    private $peso;
    private $idade;

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setPeso($peso) {
        $this->peso = $peso;
    }

    public function getPeso() {
        return $this->peso;
    }

    public function setIdade($idade) {
        $this->idade = $idade;
    }

    public function getIdade() {
        return $this->idade;
    }
}

?>