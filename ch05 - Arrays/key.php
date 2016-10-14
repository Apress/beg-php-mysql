<?php

$capitals = array("Ohio" => "Columbus", "Iowa" => "Des Moines",
                  "Arizona" => "Phoenix");
echo "<p>Can you name the capitals of these states?</p>";
while($key = key($capitals)) {
    echo $key."<br />";
    next($capitals);
}

?>