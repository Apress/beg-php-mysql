<?php

    // Preset authentication status to false
    $authorized = FALSE;

    if (isset($_SERVER['PHP_AUTH_USER']) && isset($_SERVER['PHP_AUTH_PW'])) {

        // Read the authentication file into an array
        $authFile = file("/usr/local/lib/php/site/authenticate.txt");

        // Search array for authentication match
        // If using Windows, use \r\n
        if (in_array($_SERVER['PHP_AUTH_USER'].
                     ":" 
                     .md5($_SERVER['PHP_AUTH_PW'])."\n", $authFile))
            $authorized = TRUE;
    }

    // If not authorized, display authentication prompt or 401 error
    if (! $authorized) {
        header('WWW-Authenticate: Basic Realm="Secret Stash"');
        header('HTTP/1.0 401 Unauthorized');
        print('You must provide the proper credentials!');
        exit;
    }
    // restricted material goes here...
?>

