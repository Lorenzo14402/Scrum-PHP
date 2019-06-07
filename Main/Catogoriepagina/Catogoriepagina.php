<?php
    require_once "../DB.php";
    include "../Header-Footer/Header.html";
    require_once "../../Lorenzo/Catogoriepagina overzicht fietsen/Fiets.php";
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <meta name="viewport" content="initial-scale=1, width=device-width">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="catogoriepagina.css">
</head>
<body>
    <div class="container" id="container">
        <div id="filter">
            <h3>Catogoriepagina</h3>
            <input type="checkbox" id="Heren">
            <label for="Heren">Heren</label><br>
            <input type="checkbox" id="Vrouwen">
            <label for="Heren">Vrouwen</label><br>
            <input type="checkbox" id="Kinderen">
            <label for="Heren">Kinderen</label><br>
        </div>
        <div id="fietsen">
            <h3>Fietsen</h3>
                <?php
                $conf = new DB();
                $conn = new mysqli($conf->dbhost, $conf->dbuser, $conf->dbpass, $conf->dbname);

                $query = "SELECT FietsID FROM fiets WHERE FietsID BETWEEN 1 AND 8";
                $result = $conn->query($query) or die($conn->error);

                if ($result->num_rows > 0)
                {
                    while ($fiets = $result->fetch_assoc())
                    {
                        new Fiets($fiets['FietsID']);
                    }
                }

                ?>
        </div>
    </div>
    <?php
        include "../Header-Footer/Footer.html"
    ?>
</body>
</html>
