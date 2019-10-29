<?php

class KhachHang
{
	$makh = "";
	$hoten = "";
	$ngaysinh = "";
	$cmnd = "";
	$gioitinh = false;
	$visa = false;

	public function set($_makh, $_hoten, $_ngaysinh, $_cmnd, $_gioitinh, $_visa)
	{
		$makh = $_makh;
		$hoten = $_hoten;
		$ngaysinh = $_ngaysinh;
		$cmnd = $_cmnd;
		$gioitinh = $_gioitinh;
		$visa =  $_visa;
	}
	
	public function load($id)
	{
		include 'Database.php';

		db = new Database();
		db->connect();

		$sql = 'SELECT * FROM KhachHang WHERE makh=$id';

		if(db->exec($sql))
		{
			$data = db->fetch();
			
			$makh = $data['makh'];
			$hoten = $data['hoten'];
			$ngaysinh = $data['ngaysinh'];
			$cmnd = $data['cmnd'];
			$gioitinh = $data['gioitinh'];
			$visa = $data['visa'];
		}
		else
		{
			echo "[KhachHang:construct] error: makh (ma khach hang) khong ton tai";
		}

		db->close();
	}
	
	public function save()
	{
		include 'Database.php';

		db = new Database();
		db->connect();

		$sql = "INSERT INTO KhachHang (makh, hoten, ngaysinh, cmnd, gioitinh, visa) VALUES ('$makh', '$hoten', '$ngaysinh', '$cmnd', '$gioitinh', '$visa');";
		
		if(db->exec($sql))
			echo "[KhachHang:construct] notice: Them thanh cong"
		else
			echo "[KhachHang:construct] notice: them that bai";

		db->close();
	}

	public function update()
	{
		include 'Database.php';

		db = new Database();
		db->connect();

		$sql = 'UPDATE KhachHang SET hoten=$hoten, ngaysinh=$ngaysinh, cmnd=$cmnd, gioitinh=$gioitinh, visa=$visa WHERE KhachHang.makh=$makh;';
		
		if(db->exec($sql))
			echo "[KhachHang:construct] notice: Sua thanh cong"
		else
			echo "[KhachHang:construct] notice: Sua that bai";

		db->close();
	}

	public function delete()
	{
		include 'Database.php';

		db = new Database();
		db->connect();

		$sql = 'DELETE FROM KhachHang WHERE KhachHang.makh=$makh';
		
		if(db->exec($sql))
			echo "[KhachHang:construct] notice: Xoa thanh cong"
		else
			echo "[KhachHang:construct] notice: Xoa that bai";

		db->close();
	}

}

?>