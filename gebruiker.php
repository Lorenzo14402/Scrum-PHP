<?php
// --**-- VARIABLES VAN DE POST --**--//
$gebruikersnaam = $_POST['gebruikersnaam'];
$wachtwoord = $_POST['wachtwoord'];

$host = "localhost";
$username = "root";
$password = "";
$db = "userlogin";

// --**-- DATABASE CONNECTION --**--//

    $conn = new mysqli($host, $username, $password, $db);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

$query = "SELECT * FROM gebruiker WHERE gebruikersnaam = '$gebruikersnaam' AND wachtwoord = '$wachtwoord'";

$result = $conn->query($query);

$row = $result->fetch_assoc();

if($row['gebruikersnaam'] == $gebruikersnaam && $row['wachtwoord'] == $wachtwoord){
    echo "Login successfull";
    ini_set('session.gc_maxlifetime', 3600);
    session_start();
} else {
    echo "Wrong username or passqword";

}
//--**--CHECKEN OF ALLE GEVEVENS ZIJN INGEVULD--**--//

if(empty($gebruikersnaam) && empty($wachtwoord)) {
    echo "Nog geen gebruikersnaam en wachtwoord ingevuld!";

} else if(empty($gebruikersnaam)){
    echo "vul alstublieft een gebruikersnaam in!";

} else if(empty($wachtwoord)){
    echo "vul alstublieft een wachtwoord in!";

} else {
    return;
}
echo "</br>";

?>