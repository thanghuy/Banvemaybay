<?php
    class chuyenbay extends Controller{
        function ChuyenBay(){
            $a = $this->model('MaybayModel');
            $this->views("index_v",'chuyenbay_v',[
                'Ho' => $a->getMaybay()
            ]);
        }
    }
?>