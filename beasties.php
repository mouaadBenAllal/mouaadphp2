<html>
    <body>       
        <header>
            <header>


<h1> Kies uw dier uit.</h1>
<form action="" method="GET">
    <select name="KiesDier">
        <option value="Kat">Kat</option>
        <option value="Hond">Hond</option>
        <option value="Egel">Egel</option>
        <option value="Vogel">Vogel</option>
        <option value="Muis">Muis</option>
        
    </select>
    <input type="submit" name="submit" value="Verzend"/>
</form>


<?php
if(isset($_GET["KiesDier"])){
    $KiesDier = $_GET["KiesDier"];
    switch ($KiesDier) {
        case "Kat":
             echo '<img src="/BeastiesImg/Kat.png" width="200px" height= "200px">'; 
            break;
        case "Hond":
           echo '<img src="/BeastiesImg/Hond.jpg" width="200px" height= "200px">'; 
            break;
        case "Egel":
            echo '<img src="/BeastiesImg/Egel.jpg" width="200px" height= "200px">'; 
            break;
        case "Vogel":
            echo '<img src="/BeastiesImg/Vogel.jpg" width="200px" height= "200px">'; 
            break;
        case "Muis":
           echo '<img src="/BeastiesImg/Muis.jpg" width="250px" height= "150px">'; 
            break;
    }
}
?>








   </body>
</html>
    






