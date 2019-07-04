<?php

class Editora{
    private $cod;
    private $nome;
    private $nome_reduzido;
    private $endereco;
    private $margem;
    
    function getCod() {
        return $this->cod;
    }

    function getNome() {
        return $this->nome;
    }

    function getNome_reduzido() {
        return $this->nome_reduzido;
    }

    function getEndereco() {
        return $this->endereco;
    }

    function getMargem() {
        return $this->margem;
    }

    function setCod($cod) {
        $this->cod = $cod;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setNome_reduzido($nome_reduzido) {
        $this->nome_reduzido = $nome_reduzido;
    }

    function setEndereco($endereco) {
        $this->endereco = $endereco;
    }

    function setMargem($margem) {
        $this->margem = $margem;
    }


}