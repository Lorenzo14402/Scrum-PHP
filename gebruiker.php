<?php
// --**-- VARIABLES VAN DE POST --**--//
$gebruikersnaam = $_POST['gebruikersnaam'];
$wachtwoord = $_POST['wachtwoord'];

$host = "localhost";
$username = "root";
$password = "";
$db = "userlogin";

// --**-- DATABASE CONNECTION --**--//
    require "Database.php";

    $DB = new Database();
    $conn = new mysqli($DB->host, $DB->username, $DB->password, $DB->db);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

$query = "SELECT * FROM gebruiker WHERE gebruikersnaam = '$gebruikersnaam' AND wachtwoord = '$wachtwoord'";

$result = $conn->query($query);

$row = $result->fetch_assoc();

if($row['gebruikersnaam'] == $gebruikersnaam && $row['wachtwoord'] == $wachtwoord){
    echo "Login successfull Welcome back to the website {$gebruikersnaam}";
    session_start();

} else {
    returnToLogin();
    echo "Wrong username or password";

}
//--**--CHECKEN OF ALLE GEVEVENS ZIJN INGEVULD--**--//

if(empty($gebruikersnaam) && empty($wachtwoord)) {
    echo "Nog geen gebruikersnaam en wachtwoord ingevuld!";
    returnToLogin();

} else if(empty($gebruikersnaam)){
    echo "vul alstublieft een gebruikersnaam in!";
    returnToLogin();

} else if(empty($wachtwoord)){
    echo "vul alstublieft een wachtwoord in!";
    returnToLogin();

} else {
    return;
}

function returnToLogin(){
    header("Location: Login.php");
}

?>