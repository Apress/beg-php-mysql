<?php
   // Start the session and retrieve the session ID
   session_start();
   $sid = session_id();

   $conn=pg_connect("host=localhost dbname=corporate
                     user=website password=secret") 
                     or die(pg_last_error($conn));

   // Retrieve the user data
   $query = "SELECT data FROM usersession WHERE sid='$sid'";
   $result = pg_query($conn, $query);

   $sessionVars = pg_fetch_result($result,0,'data');
   session_decode($sessionVars);

   echo "User ".$_SESSION['username']." logged on at ".$_SESSION['loggedon'].".";
?>