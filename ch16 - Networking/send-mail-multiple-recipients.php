<?php

    // Include the Mail and Mime_Mail Packages
    include('Mail.php');
    include('Mail/mime.php');
  
    // Recipient Name and E-mail Address
    $name = "Jason Gilmore";
    $recipient = "jason@example.com";
  
    // Sender Address
    $from = "bram@example.com";

    // CC Address
    $cc = "marketing@example.com";
  
    // Message Subject
    $subject = "Thank you for your inquiry";
  
    // E-mail Body
    $txt = <<<txt
    This is the e-mail message.
txt;

    // Identify the Relevant Mail Headers
    $headers['From']    = $from;
    $headers['Cc'] = $subject;
    $headers['Subject'] = $subject;

    // Instantiate Mail_mime Class
    $mimemail = new Mail_mime();
  
    // Set Message
    $mimemail->setTXTBody($txt);
  
    // Build Message
    $message = $mimemail->get();
  
    // Prepare the Headers
    $mailheaders = $mimemail->headers($headers);
  
    // Create New Instance of Mail Class
    $email =& Mail::factory('mail');
  
    // Send the E-mail!
    $email->send($recipient, $mailheaders, $message) or die("Can't send message!");
  
?>

