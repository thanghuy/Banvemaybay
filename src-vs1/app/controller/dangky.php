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
<<<<<<< Updated upstream

        public static function DK(){
=======
        function DK(){
>>>>>>> Stashed changes
            if(isset($_POST['login'])){
                //$this->username=$_POST['username'];
                setInfo(1);
            }
        }
    }

?>
