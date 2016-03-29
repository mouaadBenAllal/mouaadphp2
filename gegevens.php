<html> 
    
    
    
    <header>
        
      <?php 
     
     
     $messages = array();
     //check of invoervelden leeg zijn.
     if (empty($_GET["naam"]) && empty($_GET["adres"]) && empty($_GET["email"]) && empty($_GET["wachtwoord"])){
        $messages [] = "Vul formulier in.";
     } 
      else if (empty($_GET["naam"])){
         $messages [] = "Voer naam in";
     }
     else if (empty($_GET["adres"])){
         $messages [] = "Voer adres in";
     }
     else if (empty($_GET["email"])){
        $messages [] = "Voer email in.";
       
     }
       else if (empty($_GET["wachtwoord"])){
        $messages [] = "Voer wachtwoord in";
       
     }
     
     
     if(!count($messages) == 0) {
         //messages weergeven
         $html = "<ul>";
         foreach ($messages as $message) {
             $html .= "<li>".$message."</li>";
         }
         $html .= "</ul>";
         echo $html;
     } else {
         echo "Naam: ". $_GET["naam"]; echo "<br>";
         echo "Adres: ". $_GET["adres"]; echo "<br>";
         echo "E-mail: ". $_GET["email"]; echo "<br>";
         echo "Wachtwoord: ". $_GET["email"]; echo "<br>";
     }    
       
     
 
?>

        
    </header>
    
</html>