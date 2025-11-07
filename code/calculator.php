<?php
require_once 'item.php';
class Calculator {
    //in questa funzione vengono calcolate le tasse per il singolo item, tenendo conto dei casi in cui siano importati e/o esenti da tassi
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
    
    //funzione che arrotonda il prezzo a due cifre decimali, in eccesso nel caso in cui le cifre decimali siano 3, viene poi richiamata per fare il calcolo finale 
    private static function roundTax(float $tax): float {
        return ceil($tax * 20) / 20.0;
    }
}




?>