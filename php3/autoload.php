<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php


    spl_autoload_register(function($class){

      $filename = $class.'.php';  

    });
     ?>

  </body>
</html>
