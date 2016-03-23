<html>
<?php

$albums = array (
    'the run', '08-04-2014' => "jan", 
    '01-08-2010' => "mpa"  ,
    '02-02-2013' => "Loop" , 
    '06-05-2011' => "piet" , 
    '10-02-2016' => "henk" ,    
);

foreach($albums as $albumname ,$datum => $artistname  ){
    if ($artistname == "jan") {
        echo "<br>";
        echo $artistname;  echo $datum; 
        echo $albumname;
        
        
    }
    else {
        echo "<br>";
        echo "Artiest bestaat niet";
    }  
}
?>
</html>