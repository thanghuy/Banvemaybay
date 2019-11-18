<?php
    class dangnhap extends Controller{
        private $username;
        private $password;
        function KT_DangNhap(){
            if(isset($_POST['login'])){
                    $this->username=$_POST['username'];
                    $this->password=$_POST['password'];
                    $ModelKH=$this->model('KhachHangModel');//Gọi model KH
                    $result=$ModelKH->get_Info_Acc();
                    while($row=mysqli_fetch_array($result)){//fetch DB
                        if($row['TenDangNhap']==$this->username && $row['MatKhau']==$this->password){
                            echo $row['TenDangNhap'];
                            $_SESSION['account']= array(
                                    'ID_KH'=>$row['ID_KH'],
                                    'MaKH'=>$row['MaKH'],
                                    'TenKH'=>$row['TenKH'],
                                    'NgaySinh'=>$row['NgaySinh'],
                                    'CMND'=>$row['CMND'],
                                    'SDT'=>$row['SDT'],
                                    'GioiTinh'=>$row['GioiTinh'],
                                    'TenDangNhap'=>$row['TenDangNhap'],
                                    'MatKhau'=>$row['MatKhau'],
                                    'Email'=>$row['Email']
                            );
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
