<?php
    require_once 'item.php';
    require_once 'function.php';
    require_once 'receipt.php';

    //creo gli input, ovvero le nuove istanze di item

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
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tax Calculator</title>
    </head>
    <body>
        <div>
            <h3>
                Receipt 1
            </h3>
            <?php
                echo $receipt1->printReceipt();
               
            ?>
        </div>
        <div>
            <h3>
                Receipt 2
            </h3>
            <?php
                
                echo $receipt2->printReceipt();
            ?>
        </div>
        <div>
            <h3>
                Receipt 3
            </h3>
            <?php
                
                echo $receipt3->printReceipt();
            ?>
        </div>
    </body>
</html>