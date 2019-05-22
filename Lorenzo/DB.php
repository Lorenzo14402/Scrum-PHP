<?php
/**
 * Created by PhpStorm.
 * User: loren
 * Date: 5/15/2019
 * Time: 11:42 AM
 */

class DB{
    var $dbhost = "localhost";
    var $dbuser = "root";
    var $dbpass = "";
    var $dbname = "scrumphp";

    public function makeConnection()
    {
        $obj = new mysqli($this->dbhost, $this->dbuser, $this->dbpass, $this->dbname);
        return $obj;
    }
}

?>