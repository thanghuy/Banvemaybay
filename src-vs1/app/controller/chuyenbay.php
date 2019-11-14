<?php
    class chuyenbay extends Controller{
        function ChuyenBay(){
            $data = $this->model('MayBayModel');
            if(isset($_GET['timkiem'])){
                $this->views("index_v",'chuyenbay_v',[
                    'data' => $data->getMaybay()
                ]);
                // echo json_encode(mysqli_fetch_object($data->getMaybay()));
            }
            else{
                echo "lỗi";
            }
        }
    }
?>