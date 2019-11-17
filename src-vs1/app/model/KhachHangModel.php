<?php
    class KhachHangModel extends Database{
        public function get_Info_Acc(){
           $sql = "SELECT * FROM khachhang";
           return mysqli_query($this->conn, $sql);
        }
    }
?>