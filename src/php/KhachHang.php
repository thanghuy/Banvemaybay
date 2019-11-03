<?php

class KhachHang
{
	private $makh = "";
	private $hoten = "";
	private $ngaysinh = "";
	private $cmnd = "";
	private $gioitinh = false;
	private $visa = false;

	public function set($makh, $hoten, $ngaysinh, $cmnd, $gioitinh, $visa)
	{
		$this->makh = $makh;
		$this->hoten = $hoten;
		$this->ngaysinh = $ngaysinh;
		$this->cmnd = $cmnd;
		$this->gioitinh = $gioitinh;
		$this->visa =  $visa;
	}
	
	public function load($id)
	{
		include 'Database.php';

		$db = new Database();
		$db->connect();

		$sql = 'SELECT * FROM KhachHang WHERE makh="'.$id.'"';

		if($db->exec($sql))
		{
			$data = $db->fetch();
			
			$this->makh = $data['makh'];
			$this->hoten = $data['hoten'];
			$this->ngaysinh = $data['ngaysinh'];
			$this->cmnd = $data['cmnd'];
			$this->gioitinh = $data['gioitinh'];
			$this->visa = $data['visa'];
		}
		else
		{
			echo "[KhachHang:construct] error: makh (ma khach hang) khong ton tai";
		}

		$db->close();
	}
	
	public function save()
	{
		include 'Database.php';

		$db = new Database();
		$db->connect();

		$sql = "INSERT INTO KhachHang (makh, hoten, ngaysinh, cmnd, gioitinh, visa) VALUES ('$makh', '$hoten', '$ngaysinh', '$cmnd', '$gioitinh', '$visa');";
		
		if ($db->exec($sql)) {
            echo "[KhachHang:construct] notice: Them thanh cong";
        } else {
            echo "[KhachHang:construct] notice: them that bai";
        }

        $db->close();
	}

	public function update()
	{
		include 'Database.php';

		$db = new Database();
		$db->connect();

		$sql = 'UPDATE KhachHang SET hoten=$hoten, ngaysinh=$ngaysinh, cmnd=$cmnd, gioitinh=$gioitinh, visa=$visa WHERE KhachHang.makh=$makh;';
		
		if ($db->exec($sql)) {
            echo "[KhachHang:construct] notice: Sua thanh cong";
        } else {
            echo "[KhachHang:construct] notice: Sua that bai";
        }

        $db->close();
	}

	public function delete()
	{
		include 'Database.php';

		$db = new Database();
		$db->connect();

		$sql = 'DELETE FROM KhachHang WHERE KhachHang.makh=$makh';
		
		if ($db->exec($sql)) {
            echo "[KhachHang:construct] notice: Xoa thanh cong";
        } else {
            echo "[KhachHang:construct] notice: Xoa that bai";
        }

        $db->close();
	}

}
