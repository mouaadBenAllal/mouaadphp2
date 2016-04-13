<?php 
    session_start();
?>
<?php
$users = array (
    "janjaap" => "bal",
    "peter" => "12",
    "mo" => "1234",
    
);

if (isset($_POST["knop"]) 
    && isset ($users[$_POST["login"]]) 
    && $users[$_POST["login"]] == $_POST["pass"]) {
            $_SESSION ["user"] = $_POST ["login"];
                
            }
             else if  (empty($_POST["login"])){
                echo "Vul naam in";
            }
            else if (empty($_POST["pass"])){
       echo "vul pass in!";
            }
            else if ($users[$_POST["login"]] != $_POST["pass"]) {
                echo "incorrecte gegevens.";
            }
   
?>

<html>
    <body>
        <h1> Hallo </h1>
        <form action="<?php echo $_SERVER ["PHP_SELF"]; ?>" method="post">
	Inlognaam: <input type="text" name="login" value=""><br>
	Wachtwoord: <input type="password" name="pass" value=""><br>
	<input type="submit" name="knop" value="verstuur">
</form>
<p><a href = "website.php">website</a></p>
        <header>
            
            
            </header>
        </body>
    </html>