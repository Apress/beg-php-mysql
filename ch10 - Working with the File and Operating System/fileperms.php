<?php
   echo substr(base_convert(fileperms("/etc/passwd"), 10, 8), 3);
?>