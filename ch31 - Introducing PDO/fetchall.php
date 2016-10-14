<?php

    // Execute the query
    $stmt = $dbh->query('SELECT sku, title FROM products ORDER BY title');

    // Retrieve all of the rows
    $rows = $stmt->fetchAll();

    // Output the rows
    foreach ($rows as $row) {
        $sku = $row[0];
        $title = $row[1];
        printf("Product: %s (%s) <br />", $title, $sku);
    }



?>
