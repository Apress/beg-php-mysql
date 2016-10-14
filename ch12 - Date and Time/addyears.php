<?php

$date = new Date();
$date->setDMY(28,4,2010);
$date->addYears(4);
$dcs = $date->getArray();
print_r($dcs);

?>
