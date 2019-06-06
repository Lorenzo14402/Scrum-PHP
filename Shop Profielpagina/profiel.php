<?php

$loggedIn = true;
$geslacht = "Man";
$vNaam = "Jowi";
$tussenV = "de";
$aNaam = "haas";
$postcode = "7037DJ";
$straatnaam = "Didamseweg";
$huisnummer = "25";
$telefoonnummer = "0657535181";
$emailA = "jowidehaas@outlook.com";



if ($loggedIn == true)
{
?>
    <!doctype html>
    <html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <style>
            body{
                margin: 0px;
                padding: 0px;
            }
            table{
                border: none;
                margin: 5px;
                border-collapse: collapse;
            }
            th{
                padding: 10px 5px 10px 5px;
                background-color: #007bff;
            }
            td{
                padding: 5px 5px 5px 5px;
                background-color: #9fcdff;
            }
            #button{
                padding: 5px 5px 5px 5px;
                text-align: center;
                background-color: #9fcdff;
            }
            img{
                margin: 0px 10px 0 10px;
                float: left;
            }
            aside{

            }
            #container{
                position: relative;
                width: 700px;
                height: 500px;
                margin: 0px auto;
            }
            #profile-view{
                position: absolute;
                z-index: 2;
                height: 450px;
                width: 700px;
                margin: 0px auto;
                background-color: white;

            }
            #profile-edit {
                position: absolute;
                z-index: -1;
                height: 450px;
                width: 700px;
                margin: 0px auto;
                background-color: white;
            }
        </style>
        <script type="text/javascript">

            var front = "view";

        function bringToFront()
        {
                var view = document.getElementById("profile-view");
                var edit = document.getElementById("profile-edit");

                if (front === "view")
                {
                    view.style.zIndex = "-1";
                    edit.style.zIndex = "2";
                    front = "edit";
                }
                else if (front === "edit")
                {
                    view.style.zIndex = "2";
                    edit.style.zIndex = "-1";
                    front = "view";
                }
        }


        </script>
        <title>Profielpagina</title>
    </head>
    <?php

    ?>
    <body>
        <header>
            <?php
                echo "<br/> <br/> <br/> <br/>";
            ?>
        </header>
        <div id="container">
            <div id="profile-view">
                <!-- Profielfoto -->
                <img alt="Viewing images is not possible in this webbrowser" src="download.jpg">
                <!-- Begin tabel met persoonlijke informatie -->
                <table>
                    <tr>
                        <th colspan="2">Persoonlijke gegevens</th>
                    </tr>
                    <tr>
                        <td id="oneven">Geslacht: </td>
                        <td id="oneven"><?php echo $geslacht ?></td>
                    <tr>
                        <td id="even">Voor- en achternaam: </td>
                        <td id="even"><?php echo "$vNaam " . "$tussenV " . "$aNaam"?></td>
                    </tr>
                    <tr>
                        <td id="oneven">Postcode: </td>
                        <td id="oneven"><?php echo $postcode?></td>
                    </tr>
                    <tr>
                        <td id="even">Straat en huisnummer: </td>
                        <td id="even"><?php echo $straatnaam . " " . $huisnummer?></td>
                    </tr>
                    <tr>
                        <td id="oneven">Telefoonnummer: </td>
                        <td id="oneven"><?php echo $telefoonnummer?></td>
                    </tr>
                    <tr>
                        <td id="even">Email adres: </td>
                        <td id="even"><?php echo $emailA?></td>
                    </tr>
                    <tr>
                        <td id="button" colspan="2">
                                <button onclick="bringToFront()">Profiel Bewerken</button>
                        </td>
                    </tr>
                </table>
                <?php

                ?>
            </div>
                <div id="profile-edit">
                    <!-- Profielfoto -->
                    <img alt="Viewing images is not possible in this webbrowser" src="download.jpg">
                    <!-- Begin tabel met persoonlijke informatie -->
                    <table>
                        <form action="" type="post">
                            <tr>
                                <th colspan="2">Persoonlijke gegevens</th>
                            </tr>
                            <tr>
                                <td id="oneven">Geslacht: </td>
                                <td id="oneven">
                                    <select required>
                                        <option hidden selected></option>
                                        <option>Man</option>
                                        <option>Vrouw</option>
                                        <option>Anders</option>
                                    </select>
                                </td>
                            <tr>
                                <td id="even">Voor- en achternaam: </td>
                                <td id="even" colspan="2"><input type="text" required></td>
                            </tr>
                            <tr>
                                <td id="oneven">Postcode: </td>
                                <td id="oneven" colspan="2"><input type="text" maxlength="6" required></td>
                            </tr>
                            <tr>
                                <td id="even">Straat en huisnummer: </td>
                                <td id="even"><input type="text" required></td>
                                <td id="even"><input type="text" maxlength="6" required style="width: 100px;"></td>
                            </tr>
                            <tr>
                                <td id="oneven">Telefoonnummer: </td>
                                <td id="oneven" colspan="2"><input type="tel" maxlength="12" required></td>
                            </tr>
                            <tr>
                                <td id="even">Email adres: </td>
                                <td id="even" colspan="2"><input type="email" required></td>
                            </tr>
                            <tr>
                                <td id="even">Bevestig email adres: </td>
                                <td id="even" colspan="2"><input type="email" required></td>
                            </tr>
                            <tr>
                                <td id="even">Wachtwoord: </td>
                                <td id="even" colspan="2"><input type="password" required></td>
                            </tr>
                            <tr>
                                <td id="even">Bevestig wachtwoord: </td>
                                <td id="even" colspan="2"><input type="password" required></td>
                            </tr>
                            <tr>
                                <td id="button">
                                    <button type="reset" onclick="bringToFront()">Annuleren</button>
                                </td>
                                <td id="button">
                                    <button type="submit">Wijziging opslaan</button>
                                </td>
                            </tr>
                        </form>
                    </table>
                </div>
            <div id="Bestellingen">
            </div>
        </div>
        <footer>
            <?php
                echo "<br/> <br/> <br/> <br/>";
            ?>
        </footer>
    </body>
</html>

    <?php
}
elseif ($loggedIn == false)
{
    echo "<h1>Please log in first</h1>";
}
?>