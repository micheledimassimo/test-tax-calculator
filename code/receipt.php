<?php
require_once 'calculator.php';
class Receipt {

    private array $items = [];

    public function addItems(Item $item) {
        $this->items[] = $item;
    }

    public function printReceipt() {

        $totalTaxes = 0;
        $total = 0;

        foreach ($this->items as $item) {
            $tax = Calculator::taxCalculate($item);
            $finalPrice = ($item->quantity * $item->price) + $tax;
            $totalTaxes += $tax;
            $total += $finalPrice;
            echo "<ul>";
            echo "<li> {$item->quantity} {$item->name}"." ".number_format($finalPrice, 2)."€";
            echo "</ul>";
        }
        echo "<ul>";
        echo "<li> Sales Tasex: ".number_format($totalTaxes, 2)."€";
        echo "<li> Total ".number_format($total, 2)."€";
        echo "</ul>";
        
    }

}




?>