<?php
class database
{
        public $que;
        private $servername='localhost';
        private $username='root';
        private $password='';
        private $dbname='blog';
        private $result=array();
        private $mysqli='';


        public function __construct(){
            $this->mysqli = new mysqli($this->servername,$this->username,$this->password,$this->dbname);
        }

        public function insert_data($query)
        {
           if($this->mysqli->query($query) === true)
           {
               return true;
           }
           else{
               return false;
           }
        }

        public function fetch_data($query){
            $this->sql = $result = $this->mysqli->query($query);
        }
}



?>