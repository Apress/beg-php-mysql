<?php

$now = mktime();
$taxday = mktime(0,0,0,4,15,2010);

// Difference in seconds
$difference = $taxday - $now;

// Calculate total hours
$hours = round($difference / 60 / 60);

echo "Only $hours hours until tax day!";

?>
