<?php

require_once "../DB.php";

class Fiets{
    var $fietsNaam;
    var $fietsPrijs;
    var $fietsFoto;

    public function __construct($fid)
    {
        $conf = new DB();
        $conn = new mysqli($conf->dbhost, $conf->dbuser, $conf->dbpass, $conf->dbname);

        if($fid != NULL) {
            $query = "SELECT * FROM fiets WHERE FietsID='{$fid}'";
            $result = $conn->query($query) or die($conn->error);

            $fiets = $result->fetch_assoc();

            $this->fietsNaam = $fiets['FietsNaam'];
            $this->fietsPrijs = $fiets['FietsPrijs'];
            $this->fietsFoto = $fiets['FietsFoto'];

            $this->makeObject();
        }else {//for null
            $this->artikelFoto = NULL;
            $this->bezorgingStatus = NULL;
            $this->artikelNaam = NULL;

            echo "Geen bestelNummer meegegeven.";
        }
    }

    public function makeObject()
    {
        ?>
        <head>
            <link href="Fiets.css" rel="stylesheet" type="text/css">
        </head>
        <body>
        <div id="fiets">
            <div id="content">
                <div><img src="<?php echo $this->fietsFoto ?>"></div>
                <div class="blockcontent">
                    <table>
                        <tr>
                            <td><?php echo $this->fietsNaam?></td>
                            <td rowspan="2" colspan="1"><button>Voeg toe aan winkelmandje</button></td>
                        </tr>
                        <tr>
                            <td style="font-weight: bold;">€<?php echo $this->fietsPrijs?></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        </body>
        <?php
    }
 }

 $test = new Fiets(123);
 $test = new Fiets(123);
 $test = new Fiets(123);
 $test = new Fiets(123);

?>
