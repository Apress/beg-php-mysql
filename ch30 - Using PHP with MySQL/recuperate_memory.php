<?php

    $mysqli = new mysqli('localhost', 'catalog_user', 'secret', 'corporate');

    $query = 'SELECT sku,  name,  price FROM products ORDER by name';
    $mysqli->query($query);

    $result = $mysqli->query($query, MYSQLI_STORE_RESULT);

    // Iterate through the result set
    while(list($sku, $name, $price) = $result->fetch_row())
        printf("(%s) %s: \$%s <br />", $sku, $name, $price);

    // Recuperate the query resources
    $result->free();

    // Perhaps perform some other large query

?>

