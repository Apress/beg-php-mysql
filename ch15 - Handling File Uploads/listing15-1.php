<form action="listing15-1.php" enctype="multipart/form-data" method="post">
  <label form="email">Email:</label><br /> 
  <input type="text" name="email" value="" /><br />
  <label form="classnotes">Class notes:</label><br /> 
  <input type="file" name="classnotes" value="" /><br />
  <input type="submit" name="submit" value="Submit Notes" />
</form>
<?php

// Set a constant
define ("FILEREPOSITORY","/var/www/4e/15/classnotes");

// Make sure that the file was POSTed.
if (is_uploaded_file($_FILES['classnotes']['tmp_name'])) {
    // Was the file a PDF?
    if ($_FILES['classnotes']['type'] != "application/pdf") {
        echo "<p>Class notes must be uploaded in PDF format.</p>";
    } else {
        // Move uploaded file to final destination.
        $name = $_POST['name'];
        $result = move_uploaded_file($_FILES['classnotes']['tmp_name'],
                                                        FILEREPOSITORY.$_FILES['classnotes']['name']);
       if ($result == 1) echo "<p>File successfully uploaded.</p>"; 
           else echo "<p>There was a problem uploading the file.</p>";
    }
}
?>

