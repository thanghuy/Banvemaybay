<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of changbay
 *
 * @author Massan
 */
class changbay extends Controller
{
	static $giachang=0;
	static $giahang=0;
	static $gialoai=0;
	static $songuoilon=0;
	static $sotreem=0;
	public static function getFullName($code)
	{
		if ($code == "") {
			return "";
		} else if ($code == "HA NOI") {
			return "Hà Nội";
		} else if ($code == "TPHCM") {
			return "Hồ Chí Minh";
		} else if ($code == "DA NANG") {
			return "Đà Nẵng";
		} else if ($code == "NHA TRANG") {
			return "Nha Trang";
		} else if ($code == "HAI PHONG") {
			return "Hải Phòng";
		} else if ($code == "PHU QUOC") {
			return "Phú Quốc";
		} else if ($code == "CA MAU") {
			return "Cà Mau";
		} else if ($code == "DA LAT") {
			return "Đà Lạt";
		} else if ($code == "DIEN BIEN PHU") {
			return "Điện Biên Phủ";
		}

		return "";
	}
	public static function getTP($code)
	{
		if ($code == "") {
			return "";
		} else if ($code == "HA NOI") {
			return "Hà Nội (HAN)";
		} else if ($code == "TPHCM") {
			return "TP HCM(SGN)";
		} else if ($code == "DA NANG") {
			return "Đà Nẵng (DAD)";
		} else if ($code == "NHA TRANG") {
			return "Nha Trang (CXR)";
		} else if ($code == "HAI PHONG") {
			return "Hải Phòng (HPH)";
		} else if ($code == "PHU QUOC") {
			return "Phú Quốc (PQC)";
		} else if ($code == "CA MAU") {
			return "Cà Mau(CAH)";
		} else if ($code == "DA LAT") {
			return "Đà Lạt (DLI)";
		} else if ($code == "DIEN BIEN PHU") {
			return "Điện Biên Phủ (DIN)";
		}

		return "";
	}
	public function gethangghe($hangghe){
		if($hangghe == 1){
			return "Phổ thông";
		}
		else{
			return "Thương gia";
		}
	}
	public function getGia($giachang,$giahang,$nguoilon,$treem){
		$loai = $_SESSION['timkiem']['HangGhe'];
		$gia = $this->model("Loaive");
		$gialoai = $gia->getloaive($loai);
		self::$giachang = $giachang;
		self::$giahang = $giahang;
		self::$gialoai = $gialoai['GiaHangVe'];
		self::$sotreem = $treem;
		self::$songuoilon = $nguoilon;
	}
	public function gia1Ve(){
		$tongtien = (int)self::$giachang + (int)self::$giahang + (int)self::$gialoai;
		return number_format($tongtien,0,',','.')." VNĐ";
	}
	public function giaNguoilon(){
		$tongtien = (int)self::$songuoilon * ((int)self::$giachang + (int)self::$giahang + (int)self::$gialoai);
		return number_format($tongtien,0,',','.')." VNĐ";
	}
	public function giaTreem(){
		$tongtien = (int)self::$sotreem * ((int)self::$giachang + (int)self::$giahang + (int)self::$gialoai -300000);
		return number_format($tongtien,0,',','.')." VNĐ";
	}
	public function giatong(){
		$NguoiLon = (int)self::$songuoilon * ((int)self::$giachang + (int)self::$giahang + (int)self::$gialoai);
		$TreEm = (int)self::$sotreem * ((int)self::$giachang + (int)self::$giahang + (int)self::$gialoai -300000);
		$tongtien = $NguoiLon + $TreEm;
		return number_format($tongtien,0,',','.')." VNĐ";
	}
}
