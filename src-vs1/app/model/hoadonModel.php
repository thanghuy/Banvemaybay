<?php 
    class hoadon extends Database{
        function themhoadon(){
            $sql = "INSERT INTO hoadon () VALUES ()";
            return mysqli_query($sql,$this->conn);
        }
        function Xoahoadon($maHD){
            $sql ="DELETE FROM hoadon WHERE ID_HoaDon = ".$maHD."";
            return mysqli_query($sql, $this->conn);
        }
    }
?>