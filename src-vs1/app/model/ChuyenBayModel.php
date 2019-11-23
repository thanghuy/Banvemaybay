<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ChuyenBayModel
 *
 * @author Massan
 */
class ChuyenBayModel extends Database
{
	public function getList()
	{
		$sql = "SELECT * FROM chuyenbay";
		return mysqli_query($this->conn, $sql);
	}
	
	public function getListbyMaChang($machang)
	{
		$sql = "SELECT * FROM chuyenbay WHERE MaChang='" . $machang . "'";
		return mysqli_query($this->conn, $sql);
	}
	
	public function getListby($machang, $ngaydi, $songuoi, $page)
	{
		$sql = "SELECT * FROM chuyenbay cb,chang c, maybay m WHERE cb.MaChang = c.MaChang and cb.MaMayBay = m.MaMayBay and cb.MaChang='".$machang;
		//$sql = "SELECT * FROM chuyenbay cb,maybay m WHERE cb.MaMayBay = m.MaMayBay and MaChang='".$machang;
		if (strlen($ngaydi) != 0) {
			$sql .= "' AND NgayDi='" . $ngaydi;
		}
		$sql .=  "' AND SoGheConTrong>=".(string)$songuoi;
		$sql .=  " LIMIT 10 OFFSET ".(string)(($page-1)*10).";";
		// echo $sql;
		return mysqli_query($this->conn, $sql);
	}
	
	public function getListCount($machang, $ngaydi, $songuoi, $page)
	{
		$sql = "SELECT COUNT(*) as count FROM chuyenbay WHERE MaChang='".$machang;
		if (strlen($ngaydi) != 0) {
			$sql .= "' AND NgayDi='" . $ngaydi;
		}
		$sql .=  "' AND SoGheConTrong>=".(string)$songuoi;
		
		$result = mysqli_query($this->conn, $sql);;
		$row = $result->fetch_assoc();

		return (string)(floor($row['count'] / 10) + 1);
	}
	public function getFightNow($machang){
		$sql = "SELECT * FROM chuyenbay cb,chang c, maybay m WHERE cb.MaChang = c.MaChang and cb.MaMayBay = m.MaMayBay and ID_ChuyenBay=".$machang."";
		return mysqli_query($this->conn, $sql);
	}
}

?>