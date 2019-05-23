<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Fiets class test</title>
</head>
<body>
    <?php

        require_once "Fiets.php";

        //$conf = new DB();
        $host = "localhost";
        $user = "root";
        $pass = "";
        $db = "scrumphp";

        $conn = new mysqli($host, $user, $pass, $db);

        $result = $conn->query("SELECT FietsID FROM fiets");

        if ($result->num_rows > 0)
        {
            while ($fiets = $result->fetch_assoc())
            {
                new Fiets($fiets['FietsID']);
            }
        }
    ?>
</body>
</html>