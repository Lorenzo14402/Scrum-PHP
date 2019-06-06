<?php
    require_once "../DB.php";
    require_once "Header.php";
    require_once "../Catogoriepagina overzicht fietsen/Fiets.php";
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
            <input type="radio" id="Heren">
            <label for="Heren">Heren</label><br>
            <input type="radio" id="Vrouwen">
            <label for="Heren">Vrouwen</label><br>
            <input type="radio" id="Kinderen">
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
    <footer class="py-4 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Scrum-PHP 2019</p>
        </div>
        <!-- /.container -->
    </footer>
</body>
</html>
