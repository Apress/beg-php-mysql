<?php
   $mysqli = new mysqli("localhost", "websiteuser",
                                  "secret", "corporate");

   $stmt = $mysqli->prepare("SELECT id, first_name, last_name FROM members
             WHERE zip = (SELECT zip FROM members WHERE id=?)");

  $stmt->bind_param("ii", $recordstart, $pagesize);

$stmt->execute();

// Loop over data per usual

?>

