<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>ChainGang fietswebsite</title>

  <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <!-- Custom styles for this template -->
  <link href="css/shop-homepage.css" rel="stylesheet">

</head>

<body>
    <?php
        include "../Header-Footer/Header.html";
        require_once "../DB.php";
        require_once "../../Lorenzo/Catogoriepagina overzicht fietsen/Fiets.php";
    ?>
  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <div class="col-lg-12">

        <div class="nieuwsbrief">
          <h2>Schrijf u hier in voor de nieuwsbrief!</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <form >
            <input type="email" name="inschrijfemail">
            <input type="button" value="Inschrijven" name="btninschrijfemail">
          </form>
        </div>


        <div class="row">

                <?php
                $conf = new DB();
                $conn = new mysqli($conf->dbhost, $conf->dbuser, $conf->dbpass, $conf->dbname);

                $query = "SELECT FietsID FROM fiets WHERE FietsID BETWEEN 1 AND 12";
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
        <!-- /.row -->

      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

    <?php
    include "../Header-Footer/Footer.html";
    ?>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
