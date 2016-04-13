<?php 


include_once ("lib/Programma.php");
include_once ("lib/Liedje.php");
$ditprogramma = new Programma();
$ditprogramma ->setNaam("RadioFM");
$ditprogramma ->setOmschrijving("Top 500 POP");

foreach ($ditprogramma -> getProgramma() as $q) {
   echo $q ."<br>";
}
$nieuwliedje = new Liedje("dit is de titel","rolling stones");
$ditprogramma -> voegLiedjeToe ($nieuwliedje);
foreach($ditprogramma ->getLiedjes() as $liedje) {
    echo $liedje->getTitel()." - ".$liedje->getArtiest()."<br>";
}
?>