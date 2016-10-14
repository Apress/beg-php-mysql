<?php

$x = 4;
function assignx () { 
   $x = 0;
   printf("\$x inside function is %d <br />", $x);
} 
assignx();
printf("\$x outside of function is %d <br />", $x);


?>
