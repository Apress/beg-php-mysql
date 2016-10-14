<?php

    // Connect and bind...
    $results = ldap_search($connection, $dn, "sn=G*", array("givenName", "sn"));

    // Sort the records by the user's first name
    ldap_sort($connection, $results, "givenName");

    $entries = ldap_get_entries($connection,$results);

    $count = $entries["count"];

    for($i=0;$i<$count;$i++) {
        printf("%s %s <br />",
               $entries[$i]["givenName"][0], $entries[$i]["sn"][0]);
   }

   ldap_unbind($connection);
?>

