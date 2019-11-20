<?php
    class chitiet extends Controller{
        public $tenKH;
        public $email;
        public $sdt;
        public $ngaysinh;
        public $CMND;
        public $gt;

		function thongtinKH()
		{
            if(isset($_SESSION['account'])) $this->views('index_v','chitiet_v');
            else header('Location: ../');
        }
        function KT(){
            if(isset($_GET['thongtinKH'])){
                $this->setInfo('tenKH');
                $this->setInfo('email');
                $this->setInfo('sdt');
                $this->setInfo('ngaysinh');
                $this->setInfo('CMND');
                $this->setInfo('gt');

            }
        }
	}
?>