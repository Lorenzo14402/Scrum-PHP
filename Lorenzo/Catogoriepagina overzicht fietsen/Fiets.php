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

            echo "Geen FietsID meegegeven.";
        }
    }

    public function makeObject()
    {
        ?>
        <head>
            <style>
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
                    width: 230px;
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
                    width: 217px;
                }
                .blockcontent
                {
                    height: 33px;
                    width: 222px;
                }
                button
                {
                    background-color: #169BD5;
                    border-radius: 5px;
                    outline: none;
                    border: none;
                    color: white;
                    font-weight: bold;
                }
                button:hover
                {
                    background-color: white;
                    color: black;
                    transition: all 0.5s ease-in-out;
                    border: 1px solid #D7D7D7;
                }
                td
                {
                    margin: 0;
                    padding: 0;
                }
            </style>
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
?>
