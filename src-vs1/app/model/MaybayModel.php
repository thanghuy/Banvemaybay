<?php
    class MaybayModel extends Database{
        public function getMaybay(){
           $sql = "SELECT * FROM khachhang";
           return mysqli_query($this->conn, $sql);
        }
    }
?>