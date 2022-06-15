<?php
require_once __DIR__ . "./cibo.php";
require_once __DIR__ . "./cucce.php";
require_once __DIR__ . "./giochi.php";
require_once __DIR__ . "./utente.php";

//Utilizziamo Trait sulla classe PRODOTTO 
//Successivamento inseriamo 'USE PRODOTTO' ALL'INETERNO DELLA CLASSE 'CIBO'
//Risultato Funzionanente mostra senza problemi

$acana_cat = new Cibo("Contiene il 75% di pesce e carne (agnello, anatra, tacchino, lucioperca) e il 25% di verdure, frutta ed estratti vegetali. Ricco di proteine naturali." , "Croccantini");
$acana_cat -> setProdotto("ACANA CAT PACIFICA REGIONALS 25", 25 );
// echo  $acana_cat ->getProdotto();
$acana_dog = new Cibo("La ricetta di Acana Pacifica contiene il 70% di pesce da pesca sostenibile nelle acque canadesi del Pacifico del Nord e si rifà alle naturali esigenze nutrizionali del vostro cane e per il suo piano nutrizionale segue l’esempio dei suoi antenati in natura." , "Croccantini");
$acana_dog -> setProdotto("ACANA DOG PACIFICA REGIONALS 25", 25 ,);

$trixie_dog_1 = new Giochi("4 scatole con diversi meccanismi di apertura, riempibili con snack, in plastica con piedini antiscivolo.","Gioco d'intelligenza");

$chris = new Utente("Christian","mmmmm@gmail.com");
$chris->addProductToCart($acana_cat);
$chris->addProductToCart($acana_dog);
$chris->scadenza = true ;

$marc = new Utente("Marco","");
$marc->addProductToCart($acana_cat);
$marc->addProductToCart($acana_dog);
$marc->scadenza = false ;

$paolo = new Utente("Paolo","mmmmm@gmail.com");
$paolo->addProductToCart($acana_cat);
$paolo->addProductToCart($acana_dog);
$paolo->scadenza = false ;

// Utilizziamo la funzione getTotalPrice con l'eccezione
// Se la carta risulta scaduta True (Utente.getTotalPrice) allora deve mostrare in pagina nel carello del utente X un avviso di errore per il pagamanto
/*
try {
    $user->getTotalPrice();
} catch (Exception $e){
    echo   $e->getMessage();
}
*/
$arr = [$chris,$marc,$paolo];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
    <?php foreach($arr as $user) {?>
        <li>
            <h1><?php echo $user->name; ?></h1>
            <?php  
            try{
                $user->getTotalPrice();
            ?>
            <ul>
                <?php foreach($user->cart as $cartItem) { ?>
                    <li><?php echo $cartItem->getInfo();?></li>
                <?php } ?>
            </ul>
            <h2>Totale : <?php echo $user->getTotalPrice(); ?> <h2>
            <?php } 
            catch (Exception $e){?>
                <p><?php  echo "ERRORE :" . $e->getMessage(); ?></p>
            <?php }?>
        </li>
    <?php } ?>
    </ul>
</body>
</html>