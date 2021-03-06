<?php
class Caneta {
    private $modelo;
    private $cor;
    private $ponta;
    private $tampada;
 
    // Método Construtor
    public function Caneta($m, $c, $p) { // Método Construtor. (__construct) pode ser escrito com o nome da classe
        $this->modelo = $m;
        $this->cor = $c;
        $this->ponta = $p;
        $this->tampar();
    }

    public function tampar() {
        $this->tampada = true;
    }

    public function getModelo() {
        return $this->modelo;
    }

    public function setModelo($m) {
        $this->modelo = $m;
    }

    public function getPonta() {
        return $this->ponta;
    }

    public function setPonta($p) {
        $this->ponta = $p;
    } 
}
?>