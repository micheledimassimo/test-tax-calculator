<?php
require_once 'item.php';
class Calculator {
    public static function taxCalculate(Item $item): float {
        $taxRate = 0.10;

        if ($item->isExempt) {
            $taxRate = 0;
        }
        if ($item->isImported) {
            $taxRate += 0.05;
        }

        $tax = $item->price * $taxRate;
        return self::roundTax($tax);
    }
    
    private static function roundTax(float $tax): float {
        return ceil($tax * 20) / 20.0;
    }
}




?>