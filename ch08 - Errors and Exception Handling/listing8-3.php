<?php
/* The InvalidEmailException class is responsible for notifying the site
    administrator in the case that the e-mail is deemed invalid. */
class InvalidEmailException extends Exception {

   function __construct($message, $email) {
        $this->message = $message;
        $this->notifyAdmin($email);
   }

   private function notifyAdmin($email) {
      mail("admin@example.org","INVALID EMAIL",$email,"From:web@example.com");
   }

}

/* The subscribe class is responsible for validating an e-mail address
    and adding the user e-mail address to the database. */
class subscribe {

   function validateEmail($email) {
      try {
         if ($email == "") {
            throw new Exception("You must enter an e-mail address!");
         } else {
            list($user,$domain) = explode("@", $email);
            if (! checkdnsrr($domain, "MX"))
            {
               throw new InvalidEmailException("Invalid e-mail address!", $email);
            } else {
               return 1;
            }
        }
     } catch (Exception $e) {
        echo $e->getMessage();
     } catch (InvalidEmailException $e) {
        echo $e->getMessage();
     }

   }
   /* This method would presumably add the user's e-mail address to
       a database. */
   function subscribeUser() {
      echo $this->email." added to the database!";
   }

} #end subscribe class

/* Assume that the e-mail address came from a subscription form. */

$_POST['email'] = "someuser@example.com";

/* Attempt to validate and add address to database. */
if (isset($_POST['email'])) {
     $subscribe = new subscribe();
     if($subscribe->validateEmail($_POST['email'])) 
        $subscribe->subscribeUser($_POST['email']);
}

?>