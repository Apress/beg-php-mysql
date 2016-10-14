<?php
    // Define the dn
    $dn = "OU=People, OU=staff, DC=ad, DC=example, DC=com";

   // Convert the DN to a user-friendly format
   echo ldap_dn2ufn($dn);
?>

