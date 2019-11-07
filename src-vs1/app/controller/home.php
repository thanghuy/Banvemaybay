<?php
    class home extends Controller{
        public function main()
        {
            $this->views("index_v",'main');
        }
        public function show()
        {
            $this->views("index_v");
        }
        public function product($a,$b)
        {
            echo $a."-----".$b;
            $this->views("product",null);
        }
    }
?>
