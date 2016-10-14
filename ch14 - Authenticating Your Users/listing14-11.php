<?php

      $db = new mysqli("localhost", "webuser", "secret", "chapter14");

    // Create a pseudorandom password five characters in length
    $pswd = substr(md5(uniqid(rand())),5);

    // User's hash value
    $id = filter_var($_GET[id], FILTER_SANITIZE_STRING);

    // Update the user table with the new password
    $stmt = $db->prepare("UPDATE logins SET pswd=? WHERE hash=?");
    $stmt->execute();

    // Display the new password
    echo "<p>Your password has been reset to {$pswd}.</p>";
?>

