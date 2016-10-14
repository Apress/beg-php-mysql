<?php
   /* ... Connect to LDAP server and bind to a directory. */
   $dn = "OU=People,OU=staff,DC=ad,DC=example,DC=com";

   /* Search the directory */
   $results = ldap_search($ldapconn, $dn, "sn=G*");

   /* Grab the first entry of the result set. */
   $fe = ldap_first_entry($ldapconn,$results);

   /* Output the DN of the first entry. */
   echo "DN: ".ldap_get_dn($ldapconn,$fe);
?>