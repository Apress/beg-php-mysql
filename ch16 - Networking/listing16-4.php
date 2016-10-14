<?php

    // Retrieve the data to send to the user
    $data = file_get_contents("textfile.txt");

    // Determine the data's total size, in Kilobytes
    $fsize = filesize("textfile.txt") / 1024;

    // Define the start time
    $start = time();

    // Send the data to the user
    echo "<!-- $data -->";

    // Define the stop time
    $stop = time();

    // Calculate the time taken to send the data
    $duration = $stop - $start;

    // Divide the file size by the number of seconds taken to transmit it
    $speed = round($fsize / $duration,2);

    // Display the calculated speed in Kilobytes per second
    echo "Your network speed: $speed KB/sec.";

?>

