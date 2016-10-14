<?php
   // Reference the Smarty class library.
   require("Smarty.class.php");

   // Create a new instance of the Smarty class.
   $smarty = new Smarty;
   $smarty->template_dir="/usr/local/lib/php5/smarty/template_dir/";
   $smarty->compile_dir="/usr/local/lib/php5/smarty/compile_dir/";
   $smarty->config_dir="/usr/local/lib/php5/smarty/config_dir/";
   $smarty->cache_dir="/usr/local/lib/php5/smarty/cache_dir/";
?>