<?php
    $recordexists = checkdnsrr("example.com", "ANY");
    if ($recordexists) 
      echo "The domain name exists!";
    else 
      echo "The domain name does not appear to exist!";
?>

