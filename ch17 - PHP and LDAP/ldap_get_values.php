<?php
   /* Connect and bind to the LDAP server.... */
   $dn = "CN=Jason Gilmore, OU=People, OU=staff, DC=ad, DC=example, DC=com";
   $results = ldap_read($ldapconn, $dn, '(objectclass=person)', 
                        array("givenName", "sn", "mail"));
   $firstname = ldap_get_values($ldapconn, $results, "givenname");
   $lastname = ldap_get_values($ldapconn, $results, "sn");
   $mail = ldap_get_values($ldapconn, $results, "mail");

   echo "First name: ".$firstname[0]."<br />";
   echo "Last name: ".$lastname[0]."<br />";
   echo "Email addresses: ";
   
   $x=0;
   while ($x < $mail["count"]) {
      echo $mail[$x]. " ";
      $x++;
   }
?>