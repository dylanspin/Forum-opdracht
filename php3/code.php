<?php
include "autoload.php";
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Begin</title>
  </head>
  <body>
    <h1>Begin code</h1>
    <?php
    Class UserClass{

      public $voornaam = "dylan";
      public $achternaam = "spin";
      public $geboortedatum = "09-07-2002";
      private $username = "een username";
      private  $password = "een wachtwoord";

      private $_username;

      public function __construct($name) {
      echo $this->password;
      }

      public function getUsername() {
        return $this->_username;
     }
   }

   $class = new UserClass;
   $class->getUsername

     ?>
  </body>
</html>
