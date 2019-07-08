<?php

class Cliente{
    private $cod;
    private $tipoPessoa;
    private $cpf;
    private $nome;
    private $endereco;
    private $end_entrega;
    private $rg;
    private $telefone;
    private $fax;
    private $especialidade;
    private $no_consorcio;
    private $observacao;
    private $contato;
    private $email;
    private $mala_direta;

    function getCod() {
        return $this->cod;
    }

    function getTipoPessoa() {
        return $this->tipoPessoa;
    }

    function getCpf() {
        return $this->cpf;
    }

    function getNome() {
        return $this->nome;
    }

    function getEndereco() {
        return $this->endereco;
    }

    function getEnd_entrega() {
        return $this->end_entrega;
    }

    function getRg() {
        return $this->rg;
    }

    function getTelefone() {
        return $this->telefone;
    }

    function getFax() {
        return $this->fax;
    }

    function getEspecialidade() {
        return $this->especialidade;
    }

    function getNo_consorcio() {
        return $this->no_consorcio;
    }

    function getObservacao() {
        return $this->observacao;
    }

    function getContato() {
        return $this->contato;
    }

    function getEmail() {
        return $this->email;
    }

    function getMala_direta() {
        return $this->mala_direta;
    }

    function setCod($cod) {
        $this->cod = $cod;
    }

    function setTipoPessoa($tipoPessoa) {
        $this->tipoPessoa = $tipoPessoa;
    }

    function setCpf($cpf) {
        $this->cpf = $cpf;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setEndereco($endereco) {
        $this->endereco = $endereco;
    }

    function setEnd_entrega($end_entrega) {
        $this->end_entrega = $end_entrega;
    }

    function setRg($rg) {
        $this->rg = $rg;
    }

    function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    function setFax($fax) {
        $this->fax = $fax;
    }

    function setEspecialidade($especialidade) {
        $this->especialidade = $especialidade;
    }

    function setNo_consorcio($no_consorcio) {
        $this->no_consorcio = $no_consorcio;
    }

    function setObservacao($observacao) {
        $this->observacao = $observacao;
    }

    function setContato($contato) {
        $this->contato = $contato;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setMala_direta($mala_direta) {
        $this->mala_direta = $mala_direta;
    }

}