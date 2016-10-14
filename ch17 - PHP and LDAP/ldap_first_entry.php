<?php
   /* ... Connect to LDAP server and bind to a directory. */
   $dn = "OU=People,OU=staff,DC=ad,DC=example,DC=com";

   /* Search the directory  */
   $results = ldap_search($ldapconn, $dn, "sn=G*");  

   /* Retrieve the first entry. */
   $firstEntry = ldap_first_entry($ldapconn, $results);

   /* Retrieve the given name and surname.*/
   $gn = ldap_get_values($ldapconn, $firstEntry, "givenname");
   $sn = ldap_get_values($ldapconn, $firstEntry, "sn");
   echo "The user's name is $gn $sn.";
?>