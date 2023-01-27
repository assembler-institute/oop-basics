<?php
    abstract class Cart{
        private Int $userId = 1;
        protected Int $intPrice;
        protected Int $intQuantity;

        private Int $totalPrice;

        public function __construct(Int $price, Int $quantity){
            $this->intPrice = $price;
            $this->intQuantity = $quantity;
        }

        public function setTotalBuy(){
            $this->totalPrice = $intPrice * $intQuantity;
        }

        public function getTotalBuy(){
            return $totalPrice;
        }
    }

    abstract class Dealership{
        private String $dealershipName;
        private Bool $isOpen;

        public function __construct(String $name, Bool $open){
            $this->dealershipName = $name;
            $this->isOpen = $open;
        }

        public function getDealership(){
            return $this->dealershipName;
        }

        public function getOpen(){
            return $this->isOpen;
        }
    }
?>