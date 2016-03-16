<?php
function celsiusnaarfahrenheit($celsius) {
		$fahrenheitwaarde = ($celsius * 1.8) + 32;
		return $fahrenheitwaarde;
        
}
?>


<html>
    <h1> Functies en Includes</h1>
    <h3> Voer een celsius waarde in </h3>
    
    <form name="tempConvert" method="GET" action="">
  <input type="number" name="valueConvert" id="valueConvert">
    </html>
   
    
    <?php 
    
    
    if ($_GET["valueConvert"] != ""){
          echo "de fahrenheit is: "; echo  celsiusnaarfahrenheit($_GET["valueConvert"]); echo "F"; 
            
    }
?>

<br>
<br>




 <html>
     <h1> 
         Functie die bepaalt of de waarde deelbaar is door 3.
     </h1>
     
<?php

function deelbaardoordrie() {
    $number = 8;
  if($number % 3 == 0)  {
    echo "Getal "; echo "$number "; echo " is deelbaar";
} 
else {
echo "Getal "; echo " $number"; echo" is niet deelbaar";
}
}
deelbaardoordrie();
?>
</html>   


 <html>
     <h1> 
         Omgekeerde string.
     </h1>
     <h3> Vul iets in.</h3>
     
     <form action="" method="GET">
     <input type = "text" name = "input">
     <input type = "submit" name = "submit">
    </html>  
     
<?php
if (isset($_GET["submit"])) {
    $string = htmlentities($_GET["input"]);
    
    reverse($string);
}

    function reverse($string) {
        $length = strlen ($string);
        if ($length == 1) {
            echo $string;
        }
            else {
                echo reverse(substr($string,1,$length)).substr($string,0,1);
            }
    }
?>

