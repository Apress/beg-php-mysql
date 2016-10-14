<?php
   $primes = array(2,3,5,7,11,13,17,19,23,29,31,37,41,43,47);
   for($count = 1; $count++; $count < 1000) {
      $randomNumber = rand(1,50);
      if (in_array($randomNumber,$primes)) {
         break;
      } else {
         echo "<p>Non-prime number encountered: $randomNumber</p>";
      }
   }
?>