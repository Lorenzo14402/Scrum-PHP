<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bestelling class test</title>
</head>
<body>
    <?php

    require_once "Bestelling.php";

    //$conf = new DB();
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "scrumphp";

    $conn = new mysqli($host, $user, $pass, $db);

    $result = $conn->query("SELECT bestelNummer FROM bestellingen");

    if ($result->num_rows > 0)
    {
        while ($bestelling = $result->fetch_assoc())
        {
            new Bestelling($bestelling['bestelNummer']);
        }
    }
    ?>
</body>
</html>