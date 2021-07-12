<?php
// kauê Delgado Pereira
class Categoria{
    private $pk_categoria;
    private $fk_produto;
    private $categoria;

    public function set($pk_categoria,$fk_produto,$categoria){
        $this->pk_categoria = $pk_categoria;
        $this->fk_produto = $fk_produto;
        $this->categoria = $categoria;
    }
    public function getPk(){
        return $this->pk_categoria;
    }
    public function getFk(){
        return $this->fk_produto;
    }
    public function getCategoria(){
        return $this->categoria;
    }
}