<?php

// Execute the query
$query = "SELECT sku, title FROM products ORDER BY title";
$result = $dbh->query($query);

// Report how many columns were returned
printf("There were %d product fields returned.", $result->columnCount());

?>