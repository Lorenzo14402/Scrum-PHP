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
            <label for="Vrouwen">Vrouwen</label><br>
            <input type="checkbox" id="Kinderen">
            <label for="Kinderen">Kinderen</label><br>
        </div>
v
    </div>
    <?php
        include "../Header-Footer/Footer.html"
    ?>
</body>
</html>
