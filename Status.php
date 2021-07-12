<?php
// kauê Delgado Pereira
class Status{
    private $fk_cliente;
    private $status;

    public function set($fk_cliente,$status){
        $this->fk_cliente = $fk_cliente;
        $this->status = $status;
    }

    public function getFkCliente()
    {
        return $this->fk_cliente;
    }
    public function getStatus()
    {
        return $this->status;
    }



}