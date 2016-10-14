<?php
   /* ... Connect to LDAP server and bind to a directory. */
   $dn = "OU=People,OU=staff,DC=ad,DC=example,DC=com";

   /* Search the directory  */
   $results = ldap_search($ldapconn, $dn, "sn=G*");

   /* Retrieve the first entry. */
   $entry = ldap_first_entry($ldapconn, $results);

   while ($entry) {
      /* Retrieve the given name and surname.*/
      $gn = ldap_get_values($ldapconn, $entry, "givenname");
      $sn = ldap_get_values($ldapconn, $entry, "sn");
      echo "The user's name is $gn[0] $sn[0]<br />";
      $entry = ldap_next_entry($ldapconn, $entry);
   }
?>