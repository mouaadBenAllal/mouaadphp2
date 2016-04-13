<?php 

class Programma {
    private $naam = "";
    private $omschrijving = "";
        
 public function voegLiedjeToe($liedje) {
    $this->liedjes[] = $liedje; 
 }
 
 public function getLiedjes () {
     return $this->liedjes;
 }
    
    /**
    *geeft programma informatie terug.
    *@return array.
    *
    *
    */
public function getProgramma () {
    return array("naam" => $this ->naam,
                 "omschrijving" => $this -> omschrijving
                                    );
}

    /**
    *Geeft het programma een naam
    *@param de naam als string.
    *
    */
public function setNaam($n) {
    if (strlen($n) >=2){
    $this->naam = $n;
    }
}
/**
*Geeft het programma een omschrijving
*@param de omschrijving als string.
*
*/
public function setOmschrijving($omschrijving) {
    $this->omschrijving = $omschrijving;
    
}
}

?>
