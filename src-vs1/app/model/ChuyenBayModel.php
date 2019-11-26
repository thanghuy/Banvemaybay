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
	
	public function getListby($machang, $ngaydi, $songuoi, $hang, $thoigian, $page)
	{
		$sql = "SELECT cb.*, c.Gia, mb.GiaHang, mb.Hang, mb.HinhAnh FROM chuyenbay cb";
		$sql .= " LEFT JOIN chang c ON cb.MaChang = cb.MaChang";
		$sql .= " LEFT JOIN maybay mb ON cb.MaMayBay = mb.MaMayBay";
		$sql .= " WHERE cb.MaChang='".$machang;
		if (strlen($ngaydi) != 0) {
			$sql .= "' AND cb.NgayDi='" . $ngaydi;
		}
		$sql .=  "' AND cb.SoGheConTrong>=".(string)$songuoi;
		if (strlen($hang) != 0) {
			$sql .= " AND mb.Hang='" . $hang."'";
		}
		switch ($thoigian) {
			case '1': $sql .= " AND ThoiGianDi BETWEEN '00:00' and '06:00'"; break;
			case '2': $sql .= " AND ThoiGianDi BETWEEN '06:00' and '12:00'"; break;
			case '3': $sql .= " AND ThoiGianDi BETWEEN '12:00' and '18:00'"; break;
			case '4': $sql .= " AND ThoiGianDi BETWEEN '18:00' and '00:00'"; break;
		}
		$sql .=  " LIMIT 10 OFFSET ".(string)(($page-1)*10).";";

		return mysqli_query($this->conn, $sql);
	}
	
	public function getListCount($machang, $ngaydi, $songuoi, $hang, $thoigian, $page)
	{
		$sql = "SELECT COUNT(*) as dem FROM chuyenbay cb LEFT JOIN maybay mb ON cb.MaMayBay = mb.MaMayBay WHERE cb.MaChang='".$machang;
		if (strlen($ngaydi) != 0) {
			$sql .= "' AND NgayDi='" . $ngaydi;
		}
		$sql .=  "' AND cb.SoGheConTrong>=".(string)$songuoi;
		if (strlen($hang) != 0) {
			$sql .= " AND mb.Hang='" . $hang."'";
		}
		switch ($thoigian) {
			case '1': $sql .= " AND cb.ThoiGianDi BETWEEN '00:00' and '06:00'"; break;
			case '2': $sql .= " AND cb.ThoiGianDi BETWEEN '06:00' and '12:00'"; break;
			case '3': $sql .= " AND cb.ThoiGianDi BETWEEN '12:00' and '18:00'"; break;
			case '4': $sql .= " AND cb.ThoiGianDi BETWEEN '18:00' and '00:00'"; break;
		}
		$resultsbc = mysqli_query($this->conn, $sql);
		while ($rowabc = $resultsbc->fetch_assoc()) {
			return (string)(floor($rowabc['dem'] / 10) + 1);
		}
		return '0';
	}
	public function getFightNow($machang){
		$sql = "SELECT * FROM chuyenbay cb,chang c, maybay m WHERE cb.MaChang = c.MaChang and cb.MaMayBay = m.MaMayBay and ID_ChuyenBay=".$machang."";
		return mysqli_query($this->conn, $sql);
	}
}

?>