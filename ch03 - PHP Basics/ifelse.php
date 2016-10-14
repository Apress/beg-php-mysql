<?php
     $secretNumber = 453;
     if ($_POST['guess'] == $secretNumber) {
          echo "<p>Congratulations!!</p>";  
     } else {
          echo "<p>Sorry!</p>";
     }
?>