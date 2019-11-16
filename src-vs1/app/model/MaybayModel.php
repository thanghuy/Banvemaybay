<?php
    class MaybayModel extends Database{
        public function getMaybay(){
           $sql = "SELECT * FROM nhanvien";
           return mysqli_query($this->conn, $sql);
        }
        public function getAcc(){
            $sql= "SELECT TenTK,MatKhau FROM NhanVien";
            return mysqli_query($this->conn,$sql);
        }
    }
?>