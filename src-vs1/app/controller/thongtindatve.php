<?php
	class thongtindatve extends Controller{
		function thongtin($machang)
		{
			include $_SERVER['DOCUMENT_ROOT'].'/Banvemaybay/src-vs1/app/controller/changbay.php';
			$data = $this -> model("ChuyenBayModel");
			$this->views('index_v','thongtindatve_v',[
				"Chon" => $data->getFightNow($machang)
			]);
		}
	}
?>