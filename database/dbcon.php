<?php
class newdatabase
{
    private $servername = "localhost";
    private $username = "root";
    private $pass = "";
    private $databasename = "blog";
    private $mysqli='';

    public function __construct() {
        $this->mysqli = new mysqli($this->servername,$this->username,$this->pass,$this->databasename);
    }

    public function insertdata($insert_query)
    {
        if($this->mysqli->query($inserquery)===true){
            return true;
        }
        else{
            return false;
        }
    }
    
    public function fetch_query($fetch_query)
    {
        return $this->mysqli->query($fetch_query);
    }

    public function update_query($update_query)
    {
        if($this->mysqli->query($update_query)===true){
            return true;
        }
        else{
            return false;
        }
    }

    public function delete_query($delete_query)
    {
        if($this->mysqli->query($delete_query)===true){
            return true;
        }
        else{
            return false;
        }
    }
    
}



?>