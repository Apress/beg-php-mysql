<?php

    // Connect to the server
    $connection = ldap_connect("ldap.wjgilmore.com")
                  or die("Can't establish LDAP connection");

    // Bind to the server
    ldap_bind($connection) or die("Can't bind to LDAP.");

    // Execute various LDAP-related commands...

    // Close the connection
    ldap_unbind($connection)
               or die("Could not unbind from LDAP server.");
?>

