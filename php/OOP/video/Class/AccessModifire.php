<?php 
    class Fund
    {
        private $Fund;
        public function  __construct($initialFund = 0)
        {
            $this->Fund = $initialFund;
        }
        public function addFund($money)
        {
            $this->Fund += $money;
        }
        public function deductFund($money)
        {
            $this->Fund -= $money;
        }
        public function getTotal()
        {
            echo "Total fund is {$this->Fund}\n";
        }
    }

    $obj = new Fund(100);
    $obj->addFund(20);
    $obj->deductFund(10);
    $obj->getTotal();
?>