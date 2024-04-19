<?php
class model{

    public $conn="";
    public function __construct()
    {
            #creating database connection
            try{
                $this->conn= new mysqli('localhost','root','','pdocrud');
                // echo "Connection done";
            }
            catch(Exception){
                    die(mysqli_error($this->conn));
            }
    }
}
?>