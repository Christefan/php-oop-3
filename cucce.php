<?php
require_once __DIR__ . "./prodotto.php";
class Cucce extends Prodotto {
   public $descrizione;
   public $tipo;


   function __construct($_nome, $_prezzo, $_descrizione,$_tipo){
    parent::__construct($_nome, $_prezzo);
    $this->descrizione = $_descrizione;
    $this->tipo = $_tipo;    
    }

    public function getInfo() {
        return  'Nome prodotto: ' . $this->nome . '</br>' . ' Prezzo prodotto: ' . $this->prezzo . '</br>' . 'Descrizione cucce: '. $this->descrizione . '</br>' .'Tipo di cucce: ' . $this->tipo;
    }
}
?>