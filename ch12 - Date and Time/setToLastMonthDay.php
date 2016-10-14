<?php

$date = new Date();
$date->setDMY(1,4,2010);
$date->setToLastMonthDay();
echo $date->getDay();

?>
