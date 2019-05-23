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
                <label for="username">Gebruikersnaam</label>
                <input type="text" class="form-control" name="username" placeholder="Gebruikersnaam">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" placeholder="Email">
            </div>
            <div class="form-group">
                <label for="passowrd">Wachtwoord</label>
                <input type="password" class="form-control" name="password" placeholder="Wachtwoord">
            </div>
            <div class="form-group">
                <label for="firstname">Voornaam</label>
                <input type="text" class="form-control" name="firstname" placeholder="Voornaam">
            </div>
            <div class="form-group">
                <label for="infix">Tussenvoegsel</label>
                <input type="text" class="form-control" name="infix" placeholder="Tussenvoegsel">
            </div>
            <div class="form-group">
                <label for="lastname">Achternaam</label>
                <input type="text" class="form-control" name="lastname" placeholder="Achternaam">
            </div>
            <div class="form-group">
                <label for="city">Plaats</label>
                <input type="text" class="form-control" name="city" placeholder="Plaats">
            </div>
            <div class="form-group">
                <label for="street">Straat</label>
                <input type="text" class="form-control" name="street" placeholder="Straat">
            </div>
            <div class="form-group">
                <label for="housenumber">Huisnummer</label>
                <input type="text" class="form-control" name="housenumber" placeholder="Huisnummer">
            </div>
            <div class="form-group">
                <label for="postalcode">Postcode</label>
                <input type="text" class="form-control" name="postalcode" placeholder="Postcode">
            </div>
            <div class="form-group">
                <label for="telephone">Telefoonnummer</label>
                <input type="text" class="form-control" name="telephone" placeholder="Telefoonnummer">
            </div>
            <div class="form-group">
                <label for="gender">Geslacht</label>
                <input type="text" class="form-control" name="gender" placeholder="Geslacht">
            </div>
            <div class="form-group">
                <label for="age">Leeftijd</label>
                <input type="text" class="form-control" name="age" placeholder="Leeftijd">
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

    // Setting of variables
    $username = $_POST['username'];
    $email = $_POST['email'];
    $firstname = $_POST['firstname'];
    $infix = $_POST['infix'];
    $lastname = $_POST['lastname'];
    $city = $_POST['city'];
    $street = $_POST['street'];
    $housenumber = $_POST['housenumber'];
    $postalcode = $_POST['postalcode'];
    $telephone = $_POST['telephone'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];



    // Use DBAL to send data
    DatabaseAction::sendUserData("INSERT INTO users (userID, userFirstName, userInfix, userLastName, userEmailAddress, userPasswordHash, userHouseNumber, userStreet, userCity, userPhoneNumber, userGender, userPostalCode, userAge, userPurchases, userUsername) VALUES (NULL, '$firstname', '$infix', '$lastname', '$email', '$hash', '$housenumber', '$street', '$city', '$phonphone', '$gender', '$postalcode', '$age', '$username')");

    //DatabaseAction::getUserData("SELECT * FROM users");
}