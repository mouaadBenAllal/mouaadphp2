<?php
	$zwemclub["De spartelkuikens"] = "25";
	$zwemclub["De waterbuffels"] = "32";
	$zwemclub["Plonsmderin"] = "11";
    $zwemclub["Bommetje"] = "23";
    echo "<table border=2 style=width: 100% >";
	foreach ($zwemclub as $label => $waarde) {
		echo "<tr><td>Club" . "  " .$label." </td> <td>".$waarde."</td><td>";
        for($i=1; $waarde/5 >= $i; $i++){
            echo "<img src= zwemmer.jpg>";
        }
	echo "</td></tr>";
    }
    echo "</table>";
?>