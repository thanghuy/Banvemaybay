<?php
    class dangky extends Controller{
        private $username;
        private $password;
        private $email;
        private $address;

        function setInfo($var){
            $this->$var=$_POST[''.$var.''];
        }

        function DK(){
            if(isset($_POST['login'])){
                $this->setInfo('username');
                $this->setInfo('password');
                $this->setInfo('email');
                $this->setInfo('address');

                $Model_KH=$this->model('KhachHangModel');
                $max=$Model_KH->MaxID();//Lấy max ID
                $MaKH=$max[0]+1;
                $MaKH="KHD"."".$MaKH;
                echo $MaKH;
                $Model_KH->Insert_Acc(
                    $MaKH,
                    $this->address,
                    $this->username,
                    $this->password    
                );
            }
        }
    }

?>
