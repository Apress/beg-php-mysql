<?php

    $host = "ldap.wjgilmore.com";
    $port = "389";

    $dn = "dc=WJGilmore,dc=com";

    $connection = ldap_connect($host)
                  or die("Can't establish LDAP connection");

    ldap_set_option($connection, LDAP_OPT_PROTOCOL_VERSION, 3);

    ldap_bind($connection)
              or die("Can't bind to the server.");

    // Retrieve all records of individuals having first name
    // beginning with letter K
    $results = ldap_search($connection, $dn, "givenName=K*");

    // Dump records into array
    $entries = ldap_get_entries($connection, $results);

    // Determine how many records were returned
    $count = $entries["count"];

    // Cycle through array and output name and e-mail address
    for($x=0; $x < $count; $x++) {
        printf("%s ", $entries[$x]["cn"][0]);
        printf("(%s) <br />", $entries[$x]["mail"][0]);
    }

?>

