<?php
// kauê Delgado Pereira
class Produto {

    private $pk_produto;
    private $fk_pedido;
    private $nomeProduto;
    private $preco;
    private $quantidade;

    public function set($pk_produto,$fk_pedido,$nomeProduto,$preco,$quantidade){
        $this->pk_produto =$pk_produto;
        $this->fk_pedido = $fk_pedido;
        $this->nomeProduto = $nomeProduto;
        $this->preco = $preco;
        $this->quantidade = $quantidade;
    }
    public function getFkPedido(){
        return $this->fk_pedido;
    }
    public function getNomeProduto(){
        return $this->nomeProduto;
    }
    public function getPkProduto(){
        return $this->pk_produto;
    }
    public function getPreco(){
        return $this->preco;
    }
    public function getQuantidade(){
        return $this->quantidade;
    }
}

