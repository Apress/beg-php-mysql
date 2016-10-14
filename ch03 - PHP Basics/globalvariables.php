<?php

$somevar = 15;

function addit() { 
    global $somevar;
    $somevar++; 
    echo "Somevar is $somevar";
} 
addit();

?>
