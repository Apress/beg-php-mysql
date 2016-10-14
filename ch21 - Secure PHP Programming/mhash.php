<?php
   $userpswd = "mysecretpswd";
   $pswdhash = mhash(MHASH_SHA1, $userpswd);
   echo "The hashed password is: ".bin2hex($pswdhash);
?>
