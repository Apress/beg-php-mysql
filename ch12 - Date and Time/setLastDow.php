<?php

$date = new Date();
$date->setDMY(28,4,2010);
$date->setLastDow();
$dcs = $date->getArray();
print_r($dcs);

?>
