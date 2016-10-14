<?php
   /* connect and bind to ldap server... */
   $results = ldap_search($ldapconn, $dn, "sn=G*");

   /* do something with the result set.
   ldap_free_result($results);

   /* Perhaps perform additional searches... */
   ldap_unbind($ldapconn);
?>