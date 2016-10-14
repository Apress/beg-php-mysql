<?php

 // Create new Corporate_Drone object
   $drone1 = new Corporate_Drone();

   // Set the $drone1 employeeid member
   $drone1->setEmployeeID("12345");

   // Clone the $drone1 object
   $drone2 = clone $drone1;

   // Set the $drone2 employeeid member
   $drone2->setEmployeeID("67890");

   // Output the $drone1 and $drone2 employeeid members
   echo "Drone1 employeeID: ".$drone1->getEmployeeID()."<br />";
   echo "Drone2 employeeID: ".$drone2->getEmployeeID()."<br />";
   echo "Drone2 tiecolor: ".$drone2->getTiecolor()."<br />";


?>
