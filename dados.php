<?php

class dados {

    private $quantDezenas;
    private $resultados;
    private $totJogos;
    private $jogos;

    public function getQuantDezenas() {
        return $this->quantDezenas;
    }
    public function setQuantDezenas($quantDezenas) {
        $this->quantDezenas = $quantDezenas;
    }

    public function getResultados() {
        return $this->resultados;
    }
    public function setResultados($resultados) {
        $this->resultados = $resultados;
    }

    public function getTotJogos() {
        return $this->totJogos;
    }
    public function setTotJogos($totJogos) {
        $this->totJogos = $totJogos;
    }

    public function getJogos() {
        return $this->jogos;
    }
    public function setJogos($jogos) {
        $this->jogos = $jogos;
    }

}