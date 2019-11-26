<?php
	class chuyenbay extends Controller
	{
		function tiemkiem()
		{
			$ngaydi = $_POST["from-date"];
			if (strlen($ngaydi) == 0) {
				$ngaydi = date("d-m-Y");
			}

			if (isset($_POST["to-date"]))
				$ngayve = $_POST["to-date"];
			else
				$ngayve = date("d-m-Y");

			$nguoilon = (int)$_POST["nguoilon"];
			$treem = (int)$_POST["treem"];
			$embe = (int)$_POST["embe"];

			$_SESSION['timkiem'] = array (
					"khuhoi" => (int)$_POST["customRadioInline"],
					"diemdi" => $_POST["from-fight"],
					"diemden" => $_POST["to-fight"],
					"ngaydi" => $ngaydi,
					"ngayve" => $ngayve,
					"songuoi" => $nguoilon + $treem + $embe,
					"NguoiLon" => $nguoilon,
					"TreEm" => $treem,
					"EmBe" => $embe,
					"HangGhe" => (int)$_POST["hangghe"],
					"codeHang" => "",
					"codeThoiGian" => 0,
					"codeGia" => 0,
				);

			header('Location: ../chuyenbay/chontrang/1');
		}
		
		function loc()
		{
			if (strlen($_POST["filter_diemden"]) != 0) {
				$_SESSION['timkiem']['diemden'] = $_POST["filter_diemden"];
			}
			$_SESSION['timkiem']['codeHang'] = $_POST["filter_hang"];
			$_SESSION['timkiem']['codeThoiGian'] = $_POST["filter_thoigian"];
			$_SESSION['timkiem']['codeGia'] = $_POST["filter_gia"];

			header('Location: ../chuyenbay/chontrang/1');
		}
		
		function chontrang($page)
		{
			include $_SERVER['DOCUMENT_ROOT'].'/Banvemaybay/src-vs1/app/controller/changbay.php';
			
			$mdlChangBay = $this->model("ChangBayModel");
			$mdlChuyenBay = $this->model("ChuyenBayModel");
			$dsChuyenBay = array();

			$hang = "";
			switch ($_SESSION['timkiem']['codeHang']) {
				case 1: $hang = "VietJet Air"; break;
				case 2: $hang = "VietNam Airlines"; break;
				case 3: $hang = "Jetstar Pacific Airlines"; break;
			}
			$gia = "";
			switch ($_SESSION['timkiem']['codeGia']) {
				case 1: $gia = "<500000"; break;
				case 2: $gia = "<750000"; break;
				case 3: $gia = "<1000000"; break;
				case 4: $gia = "<1250000"; break;
				case 5: $gia = "<1500000"; break;
				case 6: $gia = "<1750000"; break;
				case 7: $gia = "<2000000"; break;
				case 8: $gia = ">2000000"; break;
			}

			$diemdi = $_SESSION['timkiem']['diemdi'];
			$diemden = $_SESSION['timkiem']['diemden'];
			$ngaydi = $_SESSION['timkiem']['ngaydi'];
			$ngayve = $_SESSION['timkiem']['ngayve'];
			$songuoi = $_SESSION['timkiem']['songuoi'];
			$codeThoiGian = $_SESSION['timkiem']['codeThoiGian'];
			$khuhoi = false;

			if ($_SESSION['timkiem']['khuhoi'] == 2)
			{
				$machang = $mdlChangBay->getMabyDiaDiem($diemden, $diemdi, $gia);
				$resultcba = $mdlChuyenBay->getListby($machang, $ngayve, $songuoi, $hang, $codeThoiGian, $page);
				if ($resultcba->num_rows == 0)
				{
					$sanbay = array('SanBayDi' => "", 'SanBayDen' => "");
					$this->show($dsChuyenBay, $sanbay, $page, $tongtrang);
					return;
				}
				$khuhoi = true;
			}
			$machang = $mdlChangBay->getMabyDiaDiem($diemdi, $diemden, $gia);
			$tongtrang = $mdlChuyenBay->getListCount($machang, $ngaydi, $songuoi, $hang, $codeThoiGian, $page);
			$resultcba = $mdlChuyenBay->getListby($machang, $ngaydi, $songuoi, $hang, $codeThoiGian, $page);
			$sanbay = $mdlChangBay->getsanbay($diemdi, $diemden);
			// $maybay = $mdlChuyenBay->getFightNow($machang); ???

			while ($rowcba = $resultcba->fetch_assoc()) {
				array_push($dsChuyenBay, $rowcba);
			}
			$this->show($dsChuyenBay, $sanbay, $page, $tongtrang, $khuhoi);
		}

		function chontrang2($page)
		{
			$_SESSION['timkiem']['chuyenbaydi'] = (int)$_POST['machuyenbay'];

			include $_SERVER['DOCUMENT_ROOT'].'/Banvemaybay/src-vs1/app/controller/changbay.php';
			
			$mdlChangBay = $this->model("ChangBayModel");
			$mdlChuyenBay = $this->model("ChuyenBayModel");
			$dsChuyenBay = array();

			$hang = "";
			switch ($_SESSION['timkiem']['codeHang']) {
				case 1: $hang = "VietJet Air"; break;
				case 2: $hang = "VietNam Airlines"; break;
				case 3: $hang = "Jetstar Pacific Airlines"; break;
			}
			$gia = "";
			switch ($_SESSION['timkiem']['codeGia']) {
				case 1: $gia = "<500000"; break;
				case 2: $gia = "<750000"; break;
				case 3: $gia = "<1000000"; break;
				case 4: $gia = "<1250000"; break;
				case 5: $gia = "<1500000"; break;
				case 6: $gia = "<1750000"; break;
				case 7: $gia = "<2000000"; break;
				case 8: $gia = ">2000000"; break;
			}

			$diemdi = $_SESSION['timkiem']['diemden'];
			$diemden = $_SESSION['timkiem']['diemdi'];
			$_SESSION['timkiem']['diemden'] = $diemden;
			$_SESSION['timkiem']['diemdi'] = $diemdi;

			$ngayve = $_SESSION['timkiem']['ngayve'];
			$songuoi = $_SESSION['timkiem']['songuoi'];
			$codeThoiGian = $_SESSION['timkiem']['codeThoiGian'];

			$machang = $mdlChangBay->getMabyDiaDiem($diemdi, $diemden, $gia);
			$tongtrang = $mdlChuyenBay->getListCount($machang, $ngayve, $songuoi, $hang, $codeThoiGian, $page);
			$resultcba = $mdlChuyenBay->getListby($machang, $ngayve, $songuoi, $hang, $codeThoiGian, $page);
			$sanbay = $mdlChangBay->getsanbay($diemdi, $diemden);

			while ($rowcba = $resultcba->fetch_assoc()) {
				array_push($dsChuyenBay, $rowcba);
			}

			$this->show($dsChuyenBay, $sanbay, $page, $tongtrang, false);
		}

		function show($dsChuyenBay, $sanbay, $page, $tongtrang, $khuhoi)
		{
			$this->views("index_v",'chuyenbay_v', [
				'dsChuyenBay' => $dsChuyenBay,
				'sanbaydi' => $sanbay['SanBayDi'],
				'sanbayden' => $sanbay['SanBayDen'],
				'trang' => $page,
				'tongtrang' => $tongtrang,
				'khuhoi' => $khuhoi
			]);
		}
	}
?>