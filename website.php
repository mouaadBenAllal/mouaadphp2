<?php  
session_start();
if(isset($_SESSION["user"])) {
    echo "welkom " .$_SESSION["user"]. " op de site";
}
else {
    header ("location: login.php");
}


?>