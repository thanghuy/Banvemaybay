<?php
    class dangky extends Controller{
        private $username;
        private $password;
        private $email;
        private $address;

         public static function setInfo($var){
            echo $var;
            //$this->$var=$_POST['username'];
        }

        public static function DK(){
            if(isset($_POST['login'])){
                //$this->username=$_POST['username'];
                setInfo(1);
            }
        }
    }

?>
