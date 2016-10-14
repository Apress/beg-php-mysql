<?php
     $secretNumber = 453;
     $_POST['guess'] = 442;
     if ($_POST['guess'] == $secretNumber) {
          echo "<p>Congratulations!</p>"; 
     } elseif (abs ($_POST['guess'] - $secretNumber) < 10) {
          echo "<p>You're getting close!</p>";
     } else {
          echo "<p>Sorry!</p>";
     }
?>