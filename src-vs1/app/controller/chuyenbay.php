<?php
    class chuyenbay extends Controller
	{
		function tiemkiem()
		{
			// Get data from FORM
			$customRadioInline = (int)$_POST["customRadioInline"]; // 1: 1 chiều			// 2: khứ hồi
			if($customRadioInline == 2){

			}
			// $dateto = new MyDate($_POST["to-date"]);
			// $numseat = $_POST["seat-class"];
			// $fightfrom = $_POST["from-fight"];
			// $fightto = $_POST["to-fight"];
			// $tenchang = $fightfrom . "->" . $fightto;
			// $datefrom = new MyDate($_POST["form-date"]);
			
			// Find result
			$numpeople = (int)$_POST["nguoilon"] + (int)$_POST["treem"] + (int)$_POST["embe"];

			$ngaydi = $_POST["from-date"];
			if (strlen($ngaydi) == 0) {
				$ngaydi = date("d-m-Y");
			}
			
			$url = "chuyenbay/chontrang/";
			$url .= $_POST["from-fight"] . "/";
			$url .= $_POST["to-fight"] . "/";
			$url .= $ngaydi . "/";
			$url .= $numpeople . "/1";

			header('Location: ../'.$url);

			$this->SaveTimkiem($numpeople,$_POST["nguoilon"],$_POST["treem"],$_POST["embe"],$_POST["hangghe"]);

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
			$sanbay = $mdlChangBay->getsanbay($diemdi, $diemden); 
			while ($row = $result->fetch_assoc()) {
				array_push($dsChuyenBay, $row);
			}

			// Display result
			$this->views("index_v",'chuyenbay_v', [
				'dsChuyenBay' => $dsChuyenBay,
				'diemdi' => $diemdi,
				'diemden' => $diemden,
				'sanbaydi' => $sanbay['SanBayDi'],
				'sanbayden' => $sanbay['SanBayDen'],
				'ngaydi' => $ngaydi,
				'songuoi' => $songuoi,
				'trang' => $page,
				'tongtrang' => $tongtrang
			]);
		}
		function SaveTimkiem($tongnguoi,$nguoilon,$treem,$embe,$hangghe){
			if(isset($_POST['timkiemmain'])){
				echo "thanhkong";
				$_SESSION['timkiem'] = array(
					'songuoi' => $tongnguoi,
					"NguoiLon" => $nguoilon,
					"TreEm" => $treem,
					"EmBe" => $embe,
					"HangGhe" => $hangghe
				);
			}
			else{
				echo "Không thành công";
			}
		}
    }
?>