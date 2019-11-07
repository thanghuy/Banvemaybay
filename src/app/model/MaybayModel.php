<?php
    class MaybayModel extends Database{
        public function getMaybay(){
           $sql = "SELECT * FROM maybay";
           return mysqli_query($this->conn, $sql);
        }
    }
?>