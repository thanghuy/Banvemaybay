<?php
    class thongtinchitiet extends Controller{
<<<<<<< Updated upstream:src-vs1/app/controller/thongtinchitiet.php
        public $MaKH;
=======
>>>>>>> Stashed changes:src-vs1/app/controller/thongtinchitiet.php
        public $tenKH;
        public $email;
        public $sdt;
        public $ngaysinh;
        public $CMND;
        public $gt;

		function thongtinKH()
		{
            if(isset($_SESSION['account'])) $this->views('index_v','thongtinKH_v');
            else header('Location: ../');
        }

<<<<<<< Updated upstream:src-vs1/app/controller/thongtinchitiet.php
        function thongtindonhang(){
            $this->views('index_v','thongtinDH_v');
=======
        function DH()
		{
            if(isset($_SESSION['account'])) $this->views('index_v','xemdonhang_v');
            else header('Location: ../');
        }

        function chitietDH(){
            $this->views('index_v','chitietdonhang_v');
>>>>>>> Stashed changes:src-vs1/app/controller/thongtinchitiet.php
        }

        function KT(){
            if(isset($_GET['thongtinKH'])){
                $this->setInfo('MaKH');
                $this->setInfo('tenKH');
                $this->setInfo('email');
                $this->setInfo('sdt');
                $this->setInfo('ngaysinh');
                $this->setInfo('CMND');
                $this->setInfo('gt');
                
                $this->getModel_KH()->Update_Info(
                    $this->MaKH,
                    $this->tenKH,
                    $this->email,
                    $this->sdt,
                    $this->ngaysinh,
                    $this->CMND,
                    $this->gt
                );
            }
        }
	}
?>