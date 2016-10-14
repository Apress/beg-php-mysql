<?php

$date = new Date();
$date->setDMY(28,4,2010);
$date->addDays(5);
$dcs = $date->getArray();
print_r($dcs);

?>
