<?php
	class thanhtoan extends Controller{
		private $tennguoidi;
		private $ngaysinh;
		private $CMND;
		private $tenKH;
		private $dienthoai;
		private $email;
		private $tongtien;
		function thanhtoanVISA($maCB)
		{
			$this->views('index_v','thanhtoanVISA_v');
			$this->tennguoidi = $_POST['hotenND'];
			$this->ngaysinh = $_POST['ngaysinh'];
			$this->CMND = $_POST['CMND'];
			$this->tenKH = $_POST['tenKH'];
			$this->dienthoai = $_POST['dienthoai'];
			$this->email = $_POST['email'];
			$loaive = $_SESSION['timkiem']['HangGhe'];
			$this->Savethanhtoan($this->tennguoidi,$this->ngaysinh,$this->CMND,$maCB,$loaive);
			$this->Savehoadon($this->tenKH,$this->dienthoai,$this->email,$this->tongtien);
		}
		public function Savethanhtoan($tennguoidi,$ngaysinh,$CMND,$maCB,$loaive){
			include $_SERVER['DOCUMENT_ROOT'].'/Banvemaybay/src-vs1/app/controller/changbay.php';
			$cb = new changbay();
			$data = $this -> model("ChuyenBayModel");
			$result = $data->getFightNow($maCB);
			$gia = 0;
			while($row = mysqli_fetch_array($result)){
				$cb->getGia($row['Gia'],$row['GiaHang'],$_SESSION['timkiem']['NguoiLon'],$_SESSION['timkiem']['TreEm']);
				$this->tongtien = $cb->giatong();
				if(isset($_SESSION['timkiem']['TreEm'])){
					$gia = $cb->gia1Vetreem();
				}
				else{
					$gia = $cb->gia1Ve();
				}
				if(isset($_POST['datcho'])){
					$_SESSION['vemaybay'] = array(
						'TenNguoiDi' => $tennguoidi,
						'NgaySinh' => $ngaysinh,
						'CMND' => $CMND,
						'MaGhe' => "B42",
						'MaCB' => $maCB,
						'LoaiVe' => $loaive,
						'Giave' => $gia,
						'Hang' => $row['Hang']
					);
					var_dump($_SESSION['vemaybay']);
				}
				else{
					echo "khong thanh cong";
				}
			}
		}
		function Savehoadon($tenKH,$dienthoai,$email,$tongtien){
			if(isset($_POST['datcho'])){
				$_SESSION['thanhtoan'] = array(
					'TenKH' => $tenKH,
					'DienThoai' => $dienthoai,
					'Email' => $email,
					'SoLuong' => $_SESSION['timkiem']['songuoi'],
					'Thanhtien' => $thanhtien
				);
				var_dump($_SESSION['thanhtoan']);
			}
			else{
				echo "khong thanh cong";
			}
		}
	}
?>