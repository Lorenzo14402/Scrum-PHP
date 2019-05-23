<?php
// --**-- DATABASE CONNECTION --**--//

 function connectDatabase($host, $db, $username, $password)
{
    $conn = new mysqli($host, $username, $password, $db);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully";
}

$conn->query("SELECT * FROM gebruiker WHERE gebruikersnaam = '$gebruikersnaam' AND wachtwoord = '$wachtwoord'");

connectDatabase("localhost", "userlogin", "root", "");

//--**--CHECKEN OF ALLE GEVEVENS ZIJN INGEVULD--**--//

$gebruikersnaam = $_POST['gebruikersnaam'];
$wachtwoord = $_POST['wachtwoord'];

if(empty($gebruikersnaam) && empty($wachtwoord)) {
    echo "Nog geen gebruikersnaam en wachtwoord ingevuld!";

} else if(empty($gebruikersnaam)){
    echo "vul alstublieft een gebruikersnaam in!";

} else if(empty($wachtwoord)){
    echo "vul alstublieft een wachtwoord in!";

} else {
    echo "gegevens ingevuld, welkom {$gebruikersnaam}!";
}
echo "</br>";

echo "$gebruikersnaam </br> $wachtwoord";

?>