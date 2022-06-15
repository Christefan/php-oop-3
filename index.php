<?php
require_once __DIR__ . "./cibo.php";
require_once __DIR__ . "./cucce.php";
require_once __DIR__ . "./giochi.php";
require_once __DIR__ . "./utente.php";

$acana_cat = new Cibo("Contiene il 75% di pesce e carne (agnello, anatra, tacchino, lucioperca) e il 25% di verdure, frutta ed estratti vegetali. Ricco di proteine naturali." , "Croccantini");
$acana_dog = new Cibo("La ricetta di Acana Pacifica contiene il 70% di pesce da pesca sostenibile nelle acque canadesi del Pacifico del Nord e si rifà alle naturali esigenze nutrizionali del vostro cane e per il suo piano nutrizionale segue l’esempio dei suoi antenati in natura." , "Croccantini");


$chris = new Utente("Christian","mmmmm@gmail.com");
$chris->addProductToCart($acana_cat);
$chris->setProdotto("ACANA CAT GRASSLANDS REGIONALS 25", 25);
echo $chris->getProdotto();
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
    <h1><?php echo $chris->getProdotto(); ?></h1>
</body>
</html>