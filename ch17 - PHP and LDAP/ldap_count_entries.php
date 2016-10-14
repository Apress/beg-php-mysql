   $results = ldap_search($connection, $dn, "sn=G*");
   $count = ldap_count_entries($connection, $results);
   echo "<p>Total entries retrieved: $count</p>";

