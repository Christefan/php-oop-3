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
        return 'Nome prodotto: ' . $this->nome . '</br>' . ' Prezzo prodotto: ' . $this->prezzo . '</br>' . 'Descrizione gioco: '. $this->descrizione . '</br>' .'Tipo di gioco: ' . $this->tipo;
    }
}
?>