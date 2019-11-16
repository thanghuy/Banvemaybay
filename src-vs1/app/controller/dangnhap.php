<?php
    class dangnhap extends Controller{
        private $username;
        private $password;
        function dn(){
            if(isset($_POST['login'])){
                echo $_POST['username'];
                echo $_POST['password'];
            }
        }
    }

?>
