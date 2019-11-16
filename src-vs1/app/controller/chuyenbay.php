<?php
    class chuyenbay extends Controller
	{
		function tiemkiem()
		{
			// Get data from FORM
			// $customRadioInline = (int)$_POST["customRadioInline"]; // 1: 1 chiều			// 2: khứ hồi
			// $dateto = new MyDate($_POST["to-date"]);
			// $numseat = $_POST["seat-class"];
			// $fightfrom = $_POST["from-fight"];
			// $fightto = $_POST["to-fight"];
			// $tenchang = $fightfrom . "->" . $fightto;
			// $datefrom = new MyDate($_POST["form-date"]);
			
			// Find result
			$numpeople = (int)$_POST["adult"] + (int)$_POST["children"] + (int)$_POST["baby"];
			
			$this->chontrang($_POST["from-fight"], $_POST["to-fight"], $_POST["form-date"], $numpeople, 1);
		}
		
		function chontrang($diemdi, $diemden, $ngaydi, $songuoi, $page)
		{
			include $_SERVER['DOCUMENT_ROOT'].'/Banvemaybay/src-vs1/app/model/ChangBayModel.php';
			include $_SERVER['DOCUMENT_ROOT'].'/Banvemaybay/src-vs1/app/model/ChuyenBayModel.php';
			include $_SERVER['DOCUMENT_ROOT'].'/Banvemaybay/src-vs1/app/controller/changbay.php';
			
			$mdlChangBay = new ChangBayModel();
			$mdlChuyenBay = new ChuyenBayModel();
			$dsChuyenBay = array();
			$machang = $mdlChangBay->getMabyDiaDiem($diemdi, $diemden);
			$tongtrang = $mdlChuyenBay->getListCount($machang, $ngaydi, $songuoi, $page);
			$result = $mdlChuyenBay->getListby($machang, $ngaydi, $songuoi, $page);
			while ($row = $result->fetch_assoc()) {
				array_push($dsChuyenBay, $row);
			}

			// Display result
			$this->views("index_v",'chuyenbay_v', [
				'dsChuyenBay' => $dsChuyenBay,
				'diemdi' => $diemdi,
				'diemden' => $diemden,
				'ngaydi' => $ngaydi,
				'songuoi' => $songuoi,
				'trang' => $page,
				'tongtrang' => $tongtrang
			]);
		}
    }
?>