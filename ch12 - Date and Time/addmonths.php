<?php

$date = new Date();
$date->setDMY(28,4,2010);
$date->addMonths(9);
$dcs = $date->getArray();
print_r($dcs);

?>
