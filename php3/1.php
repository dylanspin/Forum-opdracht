<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Opdracht_1</h1><br>
    <h2>Wat is het verschil tussen een class een object.<br>
        een object maakt het idee dat in de class zit?<br>
    </h2><br>

    <h1>Opdracht_2</h1><br>

    <?php
Class NewClass{

public $voornaam = "Dylan";
public $achternaam = "Spin";
public $geboortedatum = "09-07-2002";

}

$object = new NewClass;
var_dump($object);
echo "<br><br>";
echo $object->voornaam;
echo "<br>";
echo $object->achternaam;
echo "<br>";
echo $object->geboortedatum;
     ?>


<h1>Opdracht_3</h1><br>
<h2>
  Public:     Dat het publiek is dat iedereen kan zien en dat je er makkelijk bij kan.<br>
  Private:    Dat Het afgeschermt is dat je er niet zomaar bij kan. <br>
  protected:  Dat het beschermed is je kan er niet bij komen buiten de class zelf<br>
</h2>

<h1>Opdracht_3</h1><br>
<h2>
  <?php
  Class UserClass{

  public $voornaam = "Dylan";
  public $achternaam = "Spin";
  public $geboortedatum = "09-07-2002";

  }
   ?>

</h2>

  </body>
</html>
