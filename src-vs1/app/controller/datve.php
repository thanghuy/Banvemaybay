<?php
	class datve extends Controller{
		function ve($machang)
		{
			include $_SERVER['DOCUMENT_ROOT'].'/Banvemaybay/src-vs1/app/controller/changbay.php';
			$data = $this -> model("ChuyenBayModel");
			$this->views('index_v','datve_v',[
				"Chon" => $data->getFightNow($machang)
			]);
		}
	}
?>