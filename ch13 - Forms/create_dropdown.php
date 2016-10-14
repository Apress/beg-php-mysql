<?php

   function create_dropdown($identifier,$pairs,$firstentry,$multiple="")
   {
      // Start the dropdown list with the <select> element and title
      $dropdown = "<select name=\"$identifier\" multiple=\"$multiple\">";
      $dropdown .= "<option name=\"\">$firstentry</option>";

      // Create the dropdown elements
      foreach($pairs AS $value => $name)
      {
         $dropdown .= "<option name=\"$value\">$name</option>";
      }
      // Conclude the dropdown and return it
      echo "</select>";
      return $dropdown;
   }

?>