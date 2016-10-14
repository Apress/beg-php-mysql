<?php
   $userinfo = "Name: <b>Zeev Suraski</b> <br> Title: <b>PHP Guru</b>";
   preg_match_all ("/<b>(.*)<\/b>/U", $userinfo, $pat_array); 
   print $pat_array[0][0]." <br> ".$pat_array[0][1]."\n";
?>