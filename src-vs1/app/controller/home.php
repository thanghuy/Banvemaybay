<?php
    class home extends Controller{
        public function main()
        {
            $this->views("index_v",'main');
        }
        public function show()
        {
            echo getCurURL();
        }
        public function product($a,$b)
        {
            echo $a."-----".$b;
            $this->views("product",null);
        }
        function getCurURL()
        {
            if (isset($_SERVER["HTTPS"]) && $_SERVER["HTTPS"] == "on") {
                $pageURL = "https://";
            } else {
            $pageURL = 'http://';
            }
            if (isset($_SERVER["SERVER_PORT"]) && $_SERVER["SERVER_PORT"] != "80") {
                $pageURL .= $_SERVER["SERVER_NAME"] . ":" . $_SERVER["SERVER_PORT"] . $_SERVER["REQUEST_URI"];
            } else {
                $pageURL .= $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"];
            }
            return $pageURL;

        }
?>
