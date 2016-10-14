<?php
   $gid = filegroup("/etc/passwd"); 
   // Returns "0" on Unix, because root usually has GID of 0.
?>