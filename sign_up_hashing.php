<!-- User input -->
<html>
    <head>
        <meta charset="UTF-8">
        <title>ChainGang</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="style.css">

    </head>
    <body>
    <div class="signupContainer">
        <h1>Registreren</h1>
        <form action="#" method="post">
            <div class="form-group">
                <label for="gebruikersnaam">Gebruikersnaam</label>
                <input type="text" class="form-control" name="gebruikersnaam" placeholder="Gebruikersnaam">

                <!--
                Username: <input type="text" name="username"><br>
                Password: <input type="text" name="password"><br>
                <input type="submit" value="Submit">
                -->
            </div>
            <div class="form-group">
                <label for="wachtwoord">Wachtwoord</label>
                <input type="password" class="form-control" name="wachtwoord" placeholder="Wachtwoord">

            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    </body>
</html>

<?php

include 'DBAL.php';

if($_POST != NULL)
{
    // Hashing
    $hash = hash('sha256', $_POST['password']);

    echo "<b>Username: </b>" . $_POST['username'] . "<br>";
    echo "<b>Password SHA256: </b>" . $hash . "<br>";

    $inUsername = $_POST['username'];


    // Use DBAL to send data
    DatabaseAction::sendUserData("INSERT INTO users (userUsername, userPasswordHash, userID) VALUES ('$inUsername', '$hash', NULL)");

    //DatabaseAction::getUserData("SELECT * FROM users");
}