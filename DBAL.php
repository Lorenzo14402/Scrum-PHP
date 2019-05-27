<!-- === DATABASE ABSTRACTION LAYER === -->
<?php

class DatabaseAction
{
    public function sendUserData($query)
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "chaingang";

        try
        {
            $conn = new mysqli($servername,$username,$password, $database);
            echo "Connected successfully <br><br>";
        }
        catch(PDOException $e)
        {
            echo "Connection failed: " . $e->getMessage();
        }

        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        //echo $conn->error;
        $conn->query($query);
    }
}
?>