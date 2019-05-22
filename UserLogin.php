<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>ChainGang</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">

</head>
    <body>
    <div class="loginContainer">
    <h1>Login</h1>
    <form method="post" action="gebruiker.php">
        <div class="form-group">
            <label for="gebruikersnaam">Gebruikersnaam</label>
            <input type="text" class="form-control" name="gebruikersnaam" placeholder="Vul gebruikersnaam in">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Wachtwoord</label>
            <input type="password" class="form-control" name="wachtwoord" placeholder="Vul uw wachtwoord in">
        </div>
        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" name="ingelogdblijven">
            <label class="form-check-label" for="ingelogdblijven">Ingelogd blijven</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    </form>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>

