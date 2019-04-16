<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Include_1</h1>
    <?php
    Class UserClassEen{

      public $voornaam;
      public $achternaam;
      public $geboortedatum;
      public $username;
      public $wachtwoord;

      public function Strings($voornaam,$achternaam,$geboortedatum,$username,$wachtwoord){

        $this->voornaam = $voornaam;
        $this->achternaam = $achternaam;
        $this->geboortedatum = $geboortedatum;
        $this->username = $username;
        $this->wachtwoord = $wachtwoord;
      }
    }

    $object1 = new UserClassEen;
    $object1->Strings('Dylan','Spin','09-07-2002','Dylanspin','Goedwachtwoord');

    echo $object1->voornaam;
    echo $object1->achternaam;
    echo $object1->geboortedatum;
    echo $object1->username;
    echo $object1->wachtwoord;

    /*$object1->voornaam="Bono";
    echo $object1->voornaam;
    echo"<br>";
    echo $object1->achternaam;
    echo "<br>";*/
     ?>
  </body>
</html>
