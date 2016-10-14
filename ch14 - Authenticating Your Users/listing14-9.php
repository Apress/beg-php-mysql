<?php

   require_once("Auth/HTTP.php");

   // Designate authentication credentials, table name,
   // username and password columns, password encryption type,
   // and query parameters for retrieving other fields.

   $dblogin = array (
      'dsn' => "mysql://corpweb:secret@localhost/corporate",
      'table' => "userauth",
      'usernamecol' => "username",
      'passwordcol' => "pswd",
      'cryptType' => "md5"
      'db_fields' => "*"
   );

   // Instantiate Auth_HTTP
   $auth = new Auth_HTTP("DB", $dblogin) or die("blah");

   // Begin the authentication process
   $auth->start();

   // Message to provide in case of authentication failure
   $auth->setCancelText('Authentication credentials not accepted!');

   // Check for credentials. If not available, prompt for them.
   if($auth->getAuth())
   {
      echo "Welcome, $auth->commonname<br />";
   }

?>