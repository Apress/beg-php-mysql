<?php

   $staff["givenname"][0] = "Jason";
   $staff["givenname"][1] = "Manny";
   $staff["givenname"][2] = "Gary";
   $staff["givenname"][3] = "James";
   $staff["surname"][0] = "Gilmore";
   $staff["surname"][1] = "Champy";
   $staff["surname"][2] = "Grisold";
   $staff["surname"][3] = "Gilmore";

   $res = array_multisort($staff["surname"],SORT_STRING,SORT_ASC,
                          $staff["givenname"],SORT_STRING,SORT_ASC);

   print_r($staff);

?>