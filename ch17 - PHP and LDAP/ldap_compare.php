<?php
   /* Connect and bind */
   $dn = "CN=Jason Gilmore, OU=People, OU=staff, DC=ad, DC=example, DC=com";
   $phone = "614 555-1234";
   if (ldap_compare($ldapconn, $dn, "homePhone", $phone)) {
      echo "<p>Your phone number is up-to-date</p>";
   } else {
      echo "<p>The entered phone number does not match our records. 
                      Perhaps you've recently moved?</p>" ;
?>