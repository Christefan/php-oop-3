<?php
require_once __DIR__ . "./prodotto.php";
class Giochi{
    use Prodotto;

   public $descrizione;
   public $tipo;


   function __construct($_descrizione,$_tipo){
    $this->descrizione = $_descrizione;
    $this->tipo = $_tipo;    
    }

    public function getInfo() {
        return 'Descrizione gioco: '. $this->descrizione . '</br>' .'Tipo di gioco: ' . $this->tipo;
    }
}
?>