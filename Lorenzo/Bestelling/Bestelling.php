<?php
/**
 * Created by PhpStorm.
 * User: loren
 * Date: 5/15/2019
 * Time: 11:06 AM
 */

require_once "../DB.php";

class Bestelling{
    var $bestelNummer;
    var $artikelFoto;
    var $bezorgingStatus;
    var $artikelNaam;
    var $factuurNr;
    var $bestelDatum;
    var $bestelBedrag;
   // var $betaald; //true/false;

    public function __construct($bn)
    {
        $conf = new DB();
        $conn = new mysqli($conf->dbhost, $conf->dbuser, $conf->dbpass, $conf->dbname);

        if($bn != NULL) {
            $query = "SELECT * FROM bestellingen WHERE bestelNummer='{$bn}'";
            $result = $conn->query($query) or die($conn->error);

            $bestelling = $result->fetch_assoc();

            $this->bestelNummer = $bestelling['bestelNummer'];
            $this->artikelFoto = $bestelling['artikelFoto'];
            $this->bezorgingStatus = $bestelling['bezorgingStatus'];
            $this->artikelNaam = $bestelling['artikelNaam'];
            $this->factuurNr = $bestelling['factuurNr'];
            $this->bestelDatum = $bestelling['bestelDatum'];
            $this->bestelBedrag = $bestelling['bestelBedrag'];

            $this->makeObject();
        }else {//for null
            $this->bestelNummer = NULL;
            $this->artikelFoto = NULL;
            $this->bezorgingStatus = NULL;
            $this->artikelNaam = NULL;
            $this->factuurNr = NULL;
            $this->bestelDatum = NULL;
            $this->bestelBedrag = NULL;

            echo "Geen bestelNummer meegegeven.";
        }
    }

    public function makeObject()
    {
        ?>
        <head>
        <link href="bestellingcss.css" rel="stylesheet" type="text/css">
        </head>
        <body>
            <div id="bestelling">
                <div id="items">
                    <img src="<?php echo $this->artikelFoto?>">
                    <table>
                        <tr>
                            <th style="font-size: 20px; padding: 0; text-align: left"><?php echo $this->bestelNummer?></th>
                        </tr>
                        <tr>
                            <td style="padding: 10px;"></td>
                        </tr>
                        <tr>
                            <th>Artikel naam</th>
                            <th>Factuur nummer</th>
                            <th>Bestel datum</th>
                            <th>Bestel bedrag</th>
                        </tr>
                        <tr>
                            <td><?php echo $this->artikelNaam?></td>
                            <td><?php echo $this->factuurNr?></td>
                            <td><?php echo $this->bestelDatum?></td>
                            <td>€<?php echo $this->bestelBedrag?></td>
                        </tr>
                    </table>
                </div>
            </div>
        </body>
        <?php
    }
}
?>