<?php

class Fornecedor{
    private $cnpj;
    private $nome;
    private $endereco;
    private $insc_estadual;
    private $telefone;
    private $fax;
    private $contato;
    private $email;

    function getCnpj() {
        return $this->cnpj;
    }

    function getNome() {
        return $this->nome;
    }

    function getEndereco() {
        return $this->endereco;
    }

    function getInsc_estadual() {
        return $this->insc_estadual;
    }

    function getTelefone() {
        return $this->telefone;
    }

    function getFax() {
        return $this->fax;
    }

    function getContato() {
        return $this->contato;
    }

    function getEmail() {
        return $this->email;
    }

    function setCnpj($cnpj) {
        $this->cnpj = $cnpj;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setEndereco($endereco) {
        $this->endereco = $endereco;
    }

    function setInsc_estadual($insc_estadual) {
        $this->insc_estadual = $insc_estadual;
    }

    function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    function setFax($fax) {
        $this->fax = $fax;
    }

    function setContato($contato) {
        $this->contato = $contato;
    }

    function setEmail($email) {
        $this->email = $email;
    }


}