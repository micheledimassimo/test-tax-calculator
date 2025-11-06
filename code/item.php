<?php
//creo la classe per le nuove istanze degli articoli della ricevuta
    class Item {

        public int $quantity;
        public string $name;
        public float $price;
        public bool $isImported;
        public bool $isExempt;

        public function __construct($quantity, $name, $price, $isImported = false, $isExempt = false) {
            $this->quantity = $quantity;
            $this->name = $name;
            $this->price = $price;
            $this->isImported = $isImported;
            $this->isExempt = $isExempt;
        }
    }


?>