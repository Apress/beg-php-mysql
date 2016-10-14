<?php

function calcSalesTax($price, $tax)
{
    $total = $price + ($price * $tax); 
    echo "Total cost: $total";
}

calcSalesTax(15.00, .075);

?>
