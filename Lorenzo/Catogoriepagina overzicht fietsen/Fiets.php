<?php

require_once "../DB.php";

class Fiets{
    var $fietsNaam;
    var $fietsPrijs;
    var $fietsFoto;
    var $fietsID;
    var $fietsOmschrijving;

    public function __construct($fid)
    {
        $conf = new DB();
        $conn = new mysqli($conf->dbhost, $conf->dbuser, $conf->dbpass, $conf->dbname);

        if($fid != NULL) {
            $query = "SELECT * FROM fiets WHERE FietsID='{$fid}'";
            $result = $conn->query($query) or die($conn->error);

            $fiets = $result->fetch_assoc();

            $this->fietsID = $fiets['FietsID'];
            $this->fietsNaam = $fiets['FietsNaam'];
            $this->fietsPrijs = $fiets['FietsPrijs'];
            $this->fietsFoto = $fiets['FietsFoto'];
            $this->fietsOmschrijving = $fiets['fietsOmschrijving'];

            $this->makeObject();
        }else {//for null
            $this->fietsID = NULL;
            $this->fietsNaam = NULL;
            $this->fietsPrijs = NULL;
            $this->fietsFoto = NULL;
            $this->fietsOmschrijving = NULL;

            echo "Geen FietsID meegegeven.";
        }
    }

    public function makeObject()
    {
        ?>
        <head>
<!--            <style>
                body
                {
                    margin: 0;
                    padding: 0;
                    box-sizing: border-box;
                    font-family: Verdana;
                }
                #fiets
                {
                    margin: 5px;
                    float: left;
                }
                #content
                {
                    height: 277px;
                    width: 350px;
                    border: 1px #D7D7D7 solid;
                    float: left;
                }
                table
                {
                    margin: 5px;
                }
                img
                {
                    height: 210px;
                    width: 350px;
                }
                .blockcontent
                {
                    height: 33px;
                    width: 350px;
                }
                input[type=submit]
                {
                    background-color: #169BD5;
                    border-radius: 5px;
                    outline: none;
                    border: none;
                    color: white;
                    font-size: 12px;
                    font-weight: bold;
                    max-width: 150px;
                    height: 50px;
                }
                input[type=submit]:hover
                {
                    background-color: white;
                    color: black;
                    transition: all 0.5s ease-in-out;
                    border: 1px solid #D7D7D7;
                }
            </style>-->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        </head>
        <body>
<!--        <div id="fiets">
            <div id="content">
                <div><img src="<?php /*echo $this->fietsFoto */?>"></div>
                <div class="blockcontent">
                    <table>
                        <tr>
                            <td><?php /*echo $this->fietsNaam*/?></td>
                            <td style="font-weight: bold;">€<?php /*echo $this->fietsPrijs*/?></td>
                            <td rowspan="2" colspan="1"><form><input type="submit" name="fiets<?php /*/*echo $this->fietsID*/?>" value="Voeg toe aan winkelmandje"><form></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>-->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100">
                    <a href="#"><img class="card-img-top" src="<?php echo $this->fietsFoto ?>" alt=""></a>
                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="#"><?php echo $this->fietsNaam?></a>
                        </h4>
                        <h5>€<?php echo $this->fietsPrijs?></h5>
                        <p class="card-text"><?php echo $this->fietsOmschrijving?></p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                    </div>
                </div>
            </div>

            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        </body>
        <?php
    }
 }
?>
