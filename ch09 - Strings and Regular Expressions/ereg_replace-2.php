<?php

$url = "Apress (http://www.apress.com)";
$url = ereg_replace("http://([a-zA-Z0-9./-]+)([a-zA-Z/]+)", 
                    "<a href=\"\\0\">\\0</a>", $url);
print $url; 
// Displays Apress (<a href="http://www.apress.com">http://www.apress.com</a>)

?>