<?php

$date = new Date();
$date->setDMY(28,4,2010);
$date->addWeeks(7);
$dcs = $date->getArray();
print_r($dcs);

?>
