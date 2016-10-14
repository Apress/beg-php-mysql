<?php 

    // Execute the query
    $result = $dbh->query('SELECT sku, title FROM products ORDER BY title');

    // Fetch the first row first column
    $sku = $result->fetchColumn(0);

    // Fetch the second row second column
    $title =  $result->fetchColumn(1);

    // Output the data.
    echo "Product: $title ($sku)";



?>
