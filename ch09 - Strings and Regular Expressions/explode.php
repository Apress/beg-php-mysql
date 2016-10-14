<?php
$summary = <<< summary
In the latest installment of the ongoing Developer.com PHP series, 
I discuss the many improvements and additions to 
<a href="http://www.php.net">PHP 5's</a> object-oriented architecture.
summary;
$words = sizeof(explode(' ',strip_tags($summary)));
echo "Total words in summary: $words";
?>