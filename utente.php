<?php

class Utente {

    public $name;
    public $email;
    public $scadenza = false;

    public $cart = [];

    function __construct($_name, $_email) {
        $this->name = $_name;
        $this->email = $_email;
    }

    function addProductToCart($_product) {
            $this->cart[] = $_product;
            return true;
    }

    function getTotalPrice() {
        if($this->scadenza == false){
        $total_price = 0;
        foreach($this->cart as $item) {
            $total_price += $item->prezzo;
        }
        if($this->email != ""){
            $sconto = $total_price * 20 / 100;
            $total_price = $total_price - $sconto;
        }
        return $total_price;
        }else{
            throw new Exception("Carta di credito scaduta");
        }
    }
}