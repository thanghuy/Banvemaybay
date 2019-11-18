<?php
    class dangky extends Controller{
        private $username;
        private $password;
        private $email;
        private $address;

        function setInfo($var){
            $this->$var=$_POST[''.$var.''];
        }

        function check_Acc($username){
             if($this->getModel_KH()->Check_exist_Acc($username)==true) return false;
             else return true;
        }

        function DK(){
            if(isset($_POST['login'])){
                $this->setInfo('username');
                $this->setInfo('password');
                $this->setInfo('email');
                $this->setInfo('address');
                /*Dang ki*/
                if($this->check_Acc($this->username)==true){
                    $max=$this->getModel_KH()->MaxID();//Lấy max ID
                $MaKH=$max[0]+1;
                $MaKH="KHD"."".$MaKH;
                echo $MaKH;

                $row = array(
                    "MaKH" => $MaKH,
                    "SDT"=> $this->address,
                    "TenDangNhap" => $this->username,//Tạo mảng để kế thừa controller session
                    "MatKhau" => $this->password,
                    "Email"=>$this->email
                );

                $this->getModel_KH()->Insert_Acc(
                    $row['MaKH'],
                    $row['SDT'],
                    $row['TenDangNhap'],//InsertDB
                    $row['MatKhau'],
                    $row['Email']    
                );

                $this->create_Session_Acc($row);
                header('Location: ../');
                }
                else{
                    header('Location: ../');
                    echo "Tài khoản đã tồn tại"; 
                }
                
            }
        }
    }

?>
