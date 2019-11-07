<?php
    class app_c{
        protected $controller = "home";
        protected $action = "main";
        protected $params = [];
        function __construct(){
            $arr = $this->getUrl();
            //xu ly controller
            if(file_exists("./app/controller/".$arr[0].".php")){
                $this->controller = $arr[0];
                unset($arr[0]);
            }
            require_once "./app/controller/".$this->controller.".php";
            $this->controller = new $this->controller;
            //xu ly action
            if(isset($arr[1])){
                if(method_exists($this->controller , $arr[1])){
                    $this->action = $arr[1];
                }
                unset($arr[1]);
            }
            //xu ly parmas
            $this->params  = $arr?array_values($arr):[];
            call_user_func_array([$this->controller, $this->action], $this->params);

        }
        public function getUrl()
        {
            if(isset($_GET['url'])){
                return explode("/",filter_var(trim($_GET['url'],"/")));
            }
        }
    }
?>