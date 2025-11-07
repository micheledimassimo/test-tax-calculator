<?php
    require_once 'item.php';
    require_once 'calculator.php';
    require_once 'receipt.php';

    //creo gli input delle ricevute, ovvero le nuove istanze di receiopt e item

    $receipt1 = new Receipt();
    $receipt1->addItems(new Item(2,"book",12.49,false,true));
    $receipt1->addItems(new Item(1, "music CD", 14.99, false, false));
    $receipt1->addItems(new Item(1, "chocolate bar", 0.85, false, true));

    $receipt2 = new Receipt();
    $receipt2->addItems(new Item(1,"imported box of chocolates", 10.00,true, true));
    $receipt2->addItems(new Item(1, "imported bottle of perfume", 47.50, true, false));
    
    $receipt3 = new Receipt();
    $receipt3->addItems(new Item(1, "imported bottle of perfume", 27.99, true, false));
    $receipt3->addItems(new Item(1, "bottle of perfume", 18.99, false, false));
    $receipt3->addItems(new Item(1, "packet of headache pills", 9.75, false, true));
    $receipt3->addItems(new Item(3, "box of imported chocolates", 11.25, true, true));

    $receipt4 = new Receipt();
    $receipt4->addItems(new Item(4, "bottles of shampoo", 8.69, false, false));
    $receipt4->addItems(new Item(2, "box of ice creams", 5.29, false, true));
    $receipt4->addItems(new Item(1, "imported bottle of whiskey", 39.99, true, false));
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tax Calculator</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    </head>
    <body>
        <main>
            <div class="container-fluid">
                <h1 class="text-center py-3">
                    Tax Calculator
                </h1>
                <div class="row py-3">
                    <div class="col-4 py-1 px-3">
                    <h3>
                        Receipt 1
                    </h3>
                    <?php
                        echo $receipt1->printReceipt();
                    
                    ?>
                    </div>
                    <div class="col-4 py-1 px-3">
                        <h3>
                            Receipt 2
                        </h3>
                        <?php
                            
                            echo $receipt2->printReceipt();
                        ?>
                    </div>
                    <div class="col-4 py-1 px-3">
                        <h3>
                            Receipt 3
                        </h3>
                        <?php
                            
                            echo $receipt3->printReceipt();
                        ?>
                    </div>
                    <div class="col-4 py-1 px-3">
                        <h3>
                            Receipt 4
                        </h3>
                        <?php
                            
                            echo $receipt4->printReceipt();
                        ?>
                    </div>
                </div>
            </div>
        </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>    
    </body>
</html>