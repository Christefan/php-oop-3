<?php
require_once __DIR__ . "./prodotto.php";
class Cucce {
   public $descrizione;
   public $tipo;


   function __construct($_descrizione,$_tipo){
    $this->descrizione = $_descrizione;
    $this->tipo = $_tipo;    
    }

    public function getInfo() {
        return  'Descrizione cucce: '. $this->descrizione . '</br>' .'Tipo di cucce: ' . $this->tipo;
    }
}
?>