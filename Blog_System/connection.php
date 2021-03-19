<?php

class Connection
{
    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $dbname = "blog";
    private $conn;

    function DBconnection()
    {
        try
        {
            $this->conn = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password);
        }
        catch
        (PDOException $ex)
        {
            echo $ex->getMessage();
        }
        return $this->conn;
    }
}