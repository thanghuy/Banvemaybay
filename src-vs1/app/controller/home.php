<?php
    class home extends Controller{
        public function main()
        {
            $this->views("index_v",'main');
        }
        public function show()
        {
            echo "huythang";
        }
        public function product($a,$b)
        {
            echo $a."-----".$b;
            //$this->views("product",null);
        }
    }
?>
