<html>
    <body>       
        <header>
            <header>


<h1> Kies uw dier uit.</h1>

<form action="#" method="POST">
<select name="Dier[]" multiple> // Initializing Name With An Array
        <option value='<img src="/BeastiesImg/Kat.png" width="200px" height= "200px">'>Kat</option> 
        <option value='<img src="/BeastiesImg/Hond.jpg" width="200px" height= "200px">'>Hond</option>
        <option value='<img src="/BeastiesImg/Egel.jpg" width="200px" height= "200px">'>Egel</option>
        <option value='<img src="/BeastiesImg/Vogel.jpg" width="200px" height= "200px">'>Vogel</option>
        <option value='<img src="/BeastiesImg/Muis.jpg" width="250px" height= "150px">'>Muis</option>
</select>
<input type="submit" name="submit" value="Submit" />
</form>


<?php
if(isset($_POST['submit'])){
    foreach ($_POST['Dier'] as $select)
    {
    echo "$select"; //echo "<br>";// Displaying Selected Value
  }
}
?>








   </body>
</html>
    






