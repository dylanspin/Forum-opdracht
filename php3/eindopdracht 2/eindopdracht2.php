<!DOCTYPE html>
<?php
  session_start();
 ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="eindopdracht2.css">
  </head>
  <body>

  <div class="center">
    <h1 class="hoofd">Memory</h1>
  </div><br>

  <form action="" method="post" >
    <div class="reset">
      <input class="reset" type="submit" name="reset" value="Reset">
    </div>
  </form>

  <div class="vierkant">
    <?php
    //wat er moet gebeuren ik denk dat ik een array moet maken met 8 cijfers er in dan maak ik een table die 4 bij 4 is met een for loop
    //dan als er twee zijn omgedraaid wat gebeurd met true en false statement als die true is dan echo die een andere kleur input en bij false
    //een witte input als twee vakjes de zelfde value hebben dan moet dat vakje weg dan

    //session als een sesion var true is dan moet die de vakjes echo als die false is dan niet of een andere kleur geven dus dat moet die checken met
    //een if statement dan moeten de vakjes random getalen krijgen van 1 tot 8 en dan moet die 2 keer voor komen.
    //dan kan je ze aan klikken als er 3 zijn aangelikt eigelijk 2 maar bij de 3 klick moeten alle vakjes weer wit worden
    //als er 2 dezelfde getallen hebben dan moeten ze een andere kleur krijgen of weg gehaalt. als ze allemaal goed zijn moet er een knop komen
    //als je daar op klikt dan word de game gereset
      include('include.php');
    ?><br>
  </div>
  </body>
</html>
