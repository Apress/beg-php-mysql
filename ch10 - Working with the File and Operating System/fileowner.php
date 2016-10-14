<?php
   $uid = fileowner("/etc/passwd"); 
   // Returns "0" on Linux, as root typically has UID of 0.
?>