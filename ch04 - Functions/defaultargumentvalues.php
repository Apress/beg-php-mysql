<?php

function calcSalesTax($price, $tax=.0675)
{
   $total = $price + ($price * $tax);
   echo "Total cost: $total";
}

$price = 15.47;
calcSalesTax($price);


?>
