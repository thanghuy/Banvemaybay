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
class changbay
{
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
}
