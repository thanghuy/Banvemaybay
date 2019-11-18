<?php
    class dangnhap extends Controller{
        private $username;
        private $password;

        function check_valid_Acc($username,$password,$row){
            if($row['TenDangNhap']==$username && $row['MatKhau']==$password) return true;//Kiểm tra account hợp lệ
            else return false;
        }



        function KT_DangNhap(){
            if(isset($_POST['login'])){
                    $this->username=$_POST['username'];
                    $this->password=$_POST['password'];
                    ;//Gọi model KH
                    $result=$this->getModel_KH()->get_Info_Acc();
                    while($row=mysqli_fetch_array($result)){//fetch DB
                        if($this->check_valid_Acc($this->username,$this->password,$row)==true){//Gọi hàm kiểm tra
                            echo $row['TenDangNhap'];
                            $this->create_Session_Acc($row);//Tạo session
                        }
                   }
                   header('Location: ../');
            }
        }
        function DangXuat(){
            unset($_SESSION['account']);
        }
    }

?>
