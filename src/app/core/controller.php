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
    }
?>