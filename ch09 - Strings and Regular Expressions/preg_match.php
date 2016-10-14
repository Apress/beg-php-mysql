<?php
   $line = "Vim is the greatest word processor ever created!"; 
   if (preg_match("/\bVim\b/i", $line, $match)) print "Match found!";
?>