<?php
    $usernames = array("grace","doris","gary","nate","missing","tom");
    for ($x=0; $x < count($usernames); $x++) {
        if ($usernames[$x] == "missing") continue;
        echo "Staff member: $usernames[$x] <br />";
    }
?>