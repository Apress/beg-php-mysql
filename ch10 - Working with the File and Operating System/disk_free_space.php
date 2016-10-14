<?php
     $drive = "/usr";
     echo round((disk_free_space($drive) / 1048576), 2);
?>