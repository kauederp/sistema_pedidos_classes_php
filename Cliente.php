<?php
// kauê Delgado Pereira
// codigo | nome | endereço | telefone | limite |
class Cliente{
    private $pk_cliente;
    private $nome;
    private $endereco;
    private $telefone;
    private $limite;
    
    public function set($pk_cliente,$nome,$endereco,$telefone,$limite)
    {
        $this->pk_cliente = $pk_cliente;
        $this->nome = $nome;
        $this->endereco = $endereco;
        $this->telefone = $telefone;
        $this->limite = $limite;
    }
    public function getPk()
    {
        return $this->pk_cliente;
    }
     public function getNome()
    {
        return $this->nome;
    }
     public function getEndereco()
    {
        return $this->endereco;
    }
     public function getTelefone()
    {
        return $this->telefone;
     }
     public function getLimite()
    {
        return $this->limite;
     }







}
