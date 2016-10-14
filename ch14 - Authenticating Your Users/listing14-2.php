<?php

if (($_SERVER['PHP_AUTH_USER'] != 'client') ||
   ($_SERVER['PHP_AUTH_PW'] != 'secret')) {
      header('WWW-Authenticate: Basic Realm="Secret Stash"');
      header('HTTP/1.0 401 Unauthorized');
      print('You must provide the proper credentials!');
      exit;
}


?>
