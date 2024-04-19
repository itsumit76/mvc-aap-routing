<?php
require_once("model/model.php");

class controller extends model{

    //declare a construct method for 
    public function __construct(){
        parent:: __construct();
        //creating routing to load view
        if(isset($_SERVER["PATH_INFO"])){
            //using switch case to route every page
            switch($_SERVER["PATH_INFO"]){
                case '/':
                    require_once("index.php");
                    require_once("navbar.php");
                    require_once("content.php");
                    require_once("footer.php");
                    break;

                    default:
                    require_once("index.php");
                    require_once("navbar.php");
                    require_once("404.php");
                    require_once("footer.php");
                    break;

            }
        }
    }
}
$obj = new controller();
?>