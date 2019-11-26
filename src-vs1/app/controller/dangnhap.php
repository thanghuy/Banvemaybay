<?php
    class dangnhap extends Controller{
        private $username;
        private $password;
        function KT_DangNhap(){
            if(isset($_POST['login'])){
                    $this->username=$_POST['username'];
                    $this->password=$_POST['password'];
<<<<<<< Updated upstream

                    $KH=$this->model('KhachHangModel');//Gọi model KH
                    $result=$KH->get_Info_Acc();//Truy vấn DB
                    while($row=mysqli_fetch_array($result)){//fetch DB
                        if($row['TenDangNhap']==$this->username && $row['MatKhau']==$this->password){
                            $_SESSION['account']= array(
                                    'ID_KH'=>$row['ID_KH'],
                                    'MaKH'=>$row['MaKH'],
                                    'TenKH'=>$row['TenKH'],
                                    'NgaySinh'=>$row['NgaySinh'],
                                    'CMND'=>$row['CMND'],
                                    'SDT'=>$row['SDT'],
                                    'GioiTinh'=>$row['GioiTinh'],
                                    'TenDangNhap'=>$row['TenDangNhap'],
                                    'MatKhau'=>$row['MatKhau']
                            );
                        } 
                   }   
                   header('Location: ../');
=======
                    //Gọi model KH
                    $result=$this->getModel_KH()->get_Info_Acc();
                    var_dump($result);
                    
                    while($row=mysqli_fetch_array($result)){
                        if($this->check_valid_Acc($this->username,$this->password,$row)==true){//Gọi hàm kiểm tra
                        echo $row['TenDangNhap'];
                        $this->create_Session_Acc($row);//Tạo session
                        header('Location: ../');
                        }
                        else echo "<script>{alert('Tài khoản hoặc mật khẩu không đúng');
                            window.location.assign('../');
                        }</script>";
                    }
>>>>>>> Stashed changes
            }
        }
        function DangXuat(){
            unset($_SESSION['account']);
        }
    }

?>
