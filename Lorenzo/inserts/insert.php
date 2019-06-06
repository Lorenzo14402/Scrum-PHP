<?php

require_once "../DB.php";

$conf = new DB();
$conn = new mysqli("localhost", "root", "", "scrumphp");

$query = "INSERT INTO fiets (FietsID, FietsNaam, FietsPrijs, FietsFoto) VALUES ('', 'Heren Gazelle', 1599.99, 'http://localhost/phpstorm%20en%20vb/PhpStorm%20Lorenzo%20ten%20Hagen%20AO1B/Github/Scrum-PHP/Lorenzo/Bestelling/test.png')";

$query2 = "INSERT INTO fiets (FietsID, FietsNaam, FietsPrijs, FietsFoto) VALUES ('', 'Vrouwen Gazelle', 1299.99, 'http://localhost/phpstorm%20en%20vb/PhpStorm%20Lorenzo%20ten%20Hagen%20AO1B/Github/Scrum-PHP/Lorenzo/Bestelling/test.png')";


if ($conn->query($query) === true && $conn->query($query2) === true)
{
    echo "Insert succesfull";
}
?>
