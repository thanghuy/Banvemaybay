<?php
    class KhachHangModel extends Database{
        public function get_Info_Acc(){
           $sql = "SELECT * FROM khachhang";
           return mysqli_query($this->conn, $sql);
        }
        public function MaxID(){
            $sql="SELECT MAX(ID_KH) FROM khachhang";
            return $this->fetch_array(mysqli_query($this->conn,$sql));
        }
        public function Insert_Acc($MaKH,$sdt,$username,$password,$email){
            $sql='INSERT INTO `khachhang` (`MaKH`,`SDT`,`TenDangNhap`,`MatKhau`,`Email`) values ('.'"'.$MaKH.'"'.','.'"'.$sdt.'"'.','.'"'.$username.'"'.','.'"'.$password.'"'.','.'"'.$email.'"'.')';
             mysqli_query($this->conn,$sql);
        }
        public function Check_exist_Acc($username){
            $sql='SELECT `TenDangNhap` FROM `khachhang` where `TenDangNhap`='.'"'.$username.'"';
            $row=mysqli_fetch_array(mysqli_query($this->conn,$sql));
            if(isset($row)) return true;
            else return false;
        }
    }
?>