<?php

<?php
    // Connect to the database server
    $dbh = new PDO('mysql:host=localhost;dbname=chp31', 'webuser', 'secret');

    // Create and prepare the query
    $query = 'SELECT sku, title FROM products WHERE id=1';
    $stmt = $dbh->prepare($query);
    $stmt->execute();

    // Bind according to column offset
    $stmt->bindColumn(1, $sku);

    // Bind according to column title
    $stmt->bindColumn('title', $title);

    // Fetch the row
    $row = $stmt->fetch(PDO::FETCH_BOUND);
   
    // Output the data
    printf("Product: %s (%s)", $title, $sku);
?>


?>
