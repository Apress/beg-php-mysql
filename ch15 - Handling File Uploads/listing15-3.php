<?php
   require('HTTP/Upload.php');

   // New HTTP_Upload object
   $upload = new HTTP_Upload();

   // Retrieve the classnotes file
   $file = $upload->getFiles('classnotes');

   // Load the file properties to associative array
   $props = $file->getProp();

   // Output the properties
   print_r($props);
?>

