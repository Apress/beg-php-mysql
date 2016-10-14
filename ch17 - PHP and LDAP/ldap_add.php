<?php
   /* Connect and bind to the LDAP server...*/

   $dn = "ou=People,dc=WJGilmore,dc=com";
   $entry["displayName"] = "John Wayne";
   $entry["company"] = "Cowboys, Inc.";
   $entry["mail"] = "pilgrim@example.com";
   ldap_add($connection, $dn, $entry) or die("Could not add new entry!");
   ldap_unbind($connection);
?>

