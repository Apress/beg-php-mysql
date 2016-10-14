<?php

function calcSalesTax($price, $tax="") 
{
    $total = $price + ($price * $tax);
    echo "Total cost: $total";
}

calcSalesTax(42.00);

?>
