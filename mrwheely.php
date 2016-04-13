<html>
    <title>
        
        </title>
    <body>
        <h1> Kies uw auto uit.</h1>



<form action="#" method="post">
  
  	  <label for="sel1">Merk:</label>
	  <select id="merk" name="merk">
		  	<option value="">--Alle merken--</option> 
		  		  		<option name = "Audi" value='12000' >Audi</option> 
		  		  		<option value='Ferrari' >Ferrari</option> 
		  		  		<option value='Fiat' >Fiat</option> 
		  		  		<option value='Mercedes' >Mercedes</option> 
		  		  		<option value='Opel' >Opel</option> 
		  		  		<option value='Volkswagen' >Volkswagen</option> 
		  	  </select>
  </div>
  
    <label for="type">Minimale prijs:</label>
    <input type="text"  id="type" name="minprijs" value="">
  </div>
  
    <label for="prijs">Maximale prijs:</label>
    <input type="text" id="prijs" name="maxprijs" value="">
  </div>
  <button type="submit" name="knop" value="submit">Submit</button>
 </form>   
        </body>
    </html>
    
    <?php 
   
$autos = array('Red', =>
 'Green'=> "12000",
  'Blue'=>,
   'Yellow'=>,
    'Orange');
 
// Loop through colors array
foreach($autos as $value => $prijs){
    echo $value . "<br>";
}

    ?>



