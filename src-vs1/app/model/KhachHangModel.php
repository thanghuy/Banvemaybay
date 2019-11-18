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
        public function Insert_Acc($MaKH,$sdt,$username,$password){
            $sql='INSERT INTO `khachhang` (`MaKH`,`SDT`,`TenDangNhap`,`MatKhau`) values ('.'"'.$MaKH.'"'.','.'"'.$sdt.'"'.','.'"'.$username.'"'.','.'"'.$password.'"'.')';
            echo mysqli_query($this->conn,$sql);
        }
    }
?>