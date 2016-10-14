<?php
    // If the submit button has been pressed
    if (isset($_POST['submit']))
    {
        echo "Hi ".$_POST['name']."!<br />";
        echo "The address ".$_POST['email']." will soon be a spam-magnet!<br />";
    }
?>

<form action="subscribe.php" method="post">
    <p>
        Name:<br />
        <input type="text" name="name" size="20" maxlength="40" value="" />
    </p>
    <p>
        Email Address:<br />
        <input type="text" name="email" size="20" maxlength="40" value="" />
</p>
    <input type="submit" name = "submit" value="Go!" />
</form>