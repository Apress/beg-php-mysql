<?php
   class Corporate_Drone {
      private $employeeid;
      private $tiecolor;

      // Define a setter and getter for $employeeid
      function setEmployeeID($employeeid) {
         $this->employeeid = $employeeid;
      }
      function getEmployeeID() {
         return $this->employeeid;
      }

      // Define a setter and getter for $tiecolor
      function setTiecolor($tiecolor) {
         $this->tiecolor = $tiecolor;
      }
      function getTiecolor() {
         return $this->tiecolor;
      }
   }
   // Create new Corporate_Drone object
   $drone1 = new Corporate_Drone();

   // Set the $drone1 employeeid member
   $drone1->setEmployeeID("12345");

   // Set the $drone1 tiecolor member
   $drone1->setTiecolor("red");

   // Clone the $drone1 object
   $drone2 = clone $drone1;

   // Set the $drone2 employeeid member
   $drone2->setEmployeeID("67890");

   // Output the $drone1 and $drone2 employeeid members
   echo "Drone1 employeeID: ".$drone1->getEmployeeID()."<br />";
   echo "Drone1 tie color: ".$drone1->getTiecolor()."<br />";
   echo "Drone2 employeeID: ".$drone2->getEmployeeID()."<br />";
   echo "Drone2 tie color: ".$drone2->getTiecolor()."<br />";
?>
