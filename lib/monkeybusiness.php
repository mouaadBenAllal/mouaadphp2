<html> 
   
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Bangers">
    <style>

a {
    font-family: Bangers;
    color: #ff8400;
    text-decoration: none;
    font-size: 40px;

}
h1 {
    font-family: Arial;
}

    </style>

        <body>
        
        <center><img src = "images/monkey-business.jpg"></center>
        <center><h1> Select your monkey!</h1></center>
        <center><img src = "images/aapswing.png" > </img></center>
    
        <?php
        	
        	include_once('lib/Aapclass.php');
        	include_once('lib/Apenlijst.php');
        	

        	$A = new Aaplijst();

            $A->voegAapToe(new Aapclass("Baviaan"));
            $A->voegAapToe(new Aapclass("Guereza"));
            $A->voegAapToe(new Aapclass("Langoer"));
            $A->voegAapToe(new Aapclass("Neusaap"));
            $A->voegAapToe(new Aapclass("Tamarin"));
            $A->voegAapToe(new Aapclass("Brulaap"));
            $A->voegAapToe(new Aapclass("Halfaap"));
            $A->voegAapToe(new Aapclass("Mandril"));
            $A->voegAapToe(new Aapclass("Oeakari"));
            $A->voegAapToe(new Aapclass("Faunaap"));
            $A->voegAapToe(new Aapclass("Hoelman"));
            $A->voegAapToe(new Aapclass("Meerkat"));
            $A->voegAapToe(new Aapclass("Oormaki"));
            $A->voegAapToe(new Aapclass("Gorilla"));
            $A->voegAapToe(new Aapclass("Kuifaap"));
            $A->voegAapToe(new Aapclass("Mensaap"));
            $A->voegAapToe(new Aapclass("Spinaap"));



        	foreach($A->getAaplijst() as $aap){
        	
echo "<center> <a href='http://www.google.nl/search?q= "  . $aap->getSoortaap()."&tbm=isch' target='_blank'>" .$aap->getSoortaap() ." </a> <br></center>";
        	}
        ?>
    
    
    
        
    </body>
  
</html>

    