<?php
    class Loaive  extends Database{
        function getloaive($loai){
            $sql = "SELECT * FROM hangve WHERE MaHangVe = ".$loai."";
            $result = mysqli_query($this->conn, $sql);
            $loai = $result->fetch_assoc();
            return $loai;
        }
    } 

?>