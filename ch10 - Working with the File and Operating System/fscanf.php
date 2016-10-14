<?php
   $fh = fopen("socsecurity.txt", "r");

   /* Parse each SSN in accordance with 
      integer-integer-integer format. */

   while ($user = fscanf($fh, "%d-%d-%d")) {
      list ($part1,$part2,$part3) = $user;
      ...
   }

   fclose($fh);
?>