<?php
   $pswd = "jasongild";
   if (!eregi("^[a-zA-Z0-9]{8,10}$", $pswd)) 
   echo "The password must consist solely of alphanumeric characters, 
         and must be 8-10 characters in length!";
?>