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
class ChangBayModel extends Database
{
	public function getList()
	{
		$sql = "SELECT * FROM chang";
		return mysqli_query($this->conn, $sql);
	}
	
	public function getChangBay($machang)
	{
		$sql = "SELECT * FROM chang WHERE MaChang='".$machang."';";
		$result = mysqli_query($this->conn, $sql);
		$changbay = $result->fetch_assoc();
		return $changbay['MaChang'];
	}
	
	public function getMabyDiaDiem($diemdi, $diemden)
	{
		$sql = "SELECT MaChang FROM chang WHERE DiemDi='".$diemdi."' AND DiemDen='".$diemden."'";
		$result = mysqli_query($this->conn, $sql);
		$changbay = $result->fetch_assoc();
		return $changbay['MaChang'];
	}
	public function getsanbay($diemdi, $diemden)
	{
		$sql = "SELECT SanBayDi,SanBayDen FROM chang WHERE DiemDi='".$diemdi."' AND DiemDen='".$diemden."'";
		$result = mysqli_query($this->conn, $sql);
		$sanbay = $result->fetch_assoc();
		return $sanbay;
	}
}

?>