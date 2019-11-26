<?php
	class thongtindatve extends Controller{
		function thongtin()
		{
			$machang = (int)$_POST['machuyenbay'];

			if (isset($_SESSION['timkiem']['chuyenbaydi']))
				$_SESSION['timkiem']['chuyenbayden'] = $machang;
			else
				$_SESSION['timkiem']['chuyenbaydi'] = $machang;

			include $_SERVER['DOCUMENT_ROOT'].'/Banvemaybay/src-vs1/app/controller/changbay.php';
			$data = $this -> model("ChuyenBayModel");
			$this->views('index_v','thongtindatve_v',[
				"Chon" => $data->getFightNow($machang) // FIXME
			]);
		}
	}
?>