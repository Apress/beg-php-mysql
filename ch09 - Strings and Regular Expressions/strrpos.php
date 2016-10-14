<?php
   // Limit $summary to how many characters?
   $limit = 100;

$summary = <<< summary
In the latest installment of the ongoing Developer.com PHP series, 
I discuss the many improvements and additions to 
<a href="http://www.php.net">PHP 5's</a> object-oriented 
architecture.
summary;

   if (strlen($summary) > $limit) 
      $summary = substr($summary, 0, strrpos(substr($summary, 0, $limit), 
                        ' ')) . '...';
   echo $summary;
?>