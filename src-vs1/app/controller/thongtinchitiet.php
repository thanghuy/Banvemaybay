<?php
    class thongtinchitiet extends Controller{
        public $ID_KH;
        public $TenDangNhap;
        public $MaKH;
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

        function DH()
		{
            if(isset($_SESSION['account'])) $this->views('index_v','xemdonhang_v');
            else header('Location: ../');
        }

        function chitietDH(){
            $this->views('index_v','chitietdonhang_v');
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
                $this->setInfo('ID_KH');
                $this->setInfo('TenDangNhap');

                $this->getModel_KH()->Update_Info(
                    $this->MaKH,
                    $this->tenKH,
                    $this->email,
                    $this->sdt,
                    $this->ngaysinh,
                    $this->CMND,
                    $this->gt
                );

                $row=array(
                    "MaKH"=>$this->MaKH,
                    "TenKH"=>$this->tenKH,
                    "Email"=>$this->email,
                    "SDT"=>$this->sdt,
                    "NgaySinh"=>$this->ngaysinh,
                    "CMND"=>$this->CMND,
                    "GioiTinh"=>$this->gt,
                    "ID_KH"=>$this->ID_KH,
                    "TenDangNhap"=>$this->TenDangNhap
                );

                unset($_SESSION['account']);
                $this->create_Session_Acc($row);
            }
            header('Location: ./thongtinKH');
        }
	}
?>