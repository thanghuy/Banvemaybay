<?php
    class Controller{
        public function model($model){
            require_once "./app/model/".$model.".php";
            return new $model;
        }
        public function Views($view,$page,$data=[])
        {
            require_once "./app/views/".$view.".php";
        }

        function getModel_KH(){
            return $this->model('KhachHangModel');
        }

        public function create_Session_Acc($row){
            $_SESSION['account']= array(
                'ID_KH'=>$row['ID_KH'],
                'MaKH'=>$row['MaKH'],
                'TenKH'=>$row['TenKH'],
                'NgaySinh'=>$row['NgaySinh'],
                'CMND'=>$row['CMND'],
                'SDT'=>$row['SDT'],
                'GioiTinh'=>$row['GioiTinh'],
                'TenDangNhap'=>$row['TenDangNhap'],
                'MatKhau'=>$row['MatKhau'],
                'Email'=>$row['Email']
        );
        }
    }
?>