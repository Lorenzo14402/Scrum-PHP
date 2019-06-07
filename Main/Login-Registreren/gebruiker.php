<?php
// --**-- VARIABLES VAN DE POST --**--//
$gebruikersnaam = $_POST['gebruikersnaam'];
$wachtwoord = $_POST['wachtwoord'];

$host = "localhost";
$username = "root";
$password = "";
$db = "scrumphp";

// --**-- DATABASE CONNECTION --**--//

    $conn = new mysqli($host, $username, $password, $db);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

$query = "SELECT * FROM users WHERE userUsername = '$gebruikersnaam' AND userPasswordHash = '$wachtwoord'";

$result = $conn->query($query);

$row = $result->fetch_assoc();

if($row['userUsername'] == $gebruikersnaam && $row['userPasswordHash'] == $wachtwoord){
    echo "Login successfull";
    ini_set('session.gc_maxlifetime', 3600);
    session_start();
    header("Location: ../Homepage/index.php");
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