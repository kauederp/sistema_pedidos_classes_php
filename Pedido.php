<?php
// kauê Delgado Pereira
class Pedido
{
    private $pk_pedido;
    private $date;

    public function setPk($pk_pedido)
    {
        $this->pk_pedido = $pk_pedido;
    }
    public function setDate($date){
        $this->date = $date;
    }
    public function getPkPedido()
    {
        return $this->pk_pedido;
    }



    public function getDate(){
        return $this->date;
    }

}