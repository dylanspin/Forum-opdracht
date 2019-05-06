<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="eindopdracht2.css">
  </head>
  <body>

  <div class="center">
    <h1 class="hoofd">memory</h1>
  </div>
<p id="test"></p>
  <div class="vierkant">
    <form method="post" action="eindopdracht2.php">
      <div class="column">
        <div class="vak" id="1" onclick="Kleur(this)"></div><br><br>
        <div class="vak" id="2" onclick="Kleur(this)"></div><br><br>
        <div class="vak" id="3" onclick="Kleur(this)"></div><br><br>
        <div class="vak" id="4" onclick="Kleur(this)"></div>
      </div>
      <div class="column">
        <div class="vak" id="5" onclick="Kleur(this)"></div><br><br>
        <div class="vak" id="6" onclick="Kleur(this)"></div><br><br>
        <div class="vak" id="7" onclick="Kleur(this)"></div><br><br>
        <div class="vak" id="8" onclick="Kleur(this)"></div>
      </div>
      <div class="column">
        <div class="vak" id="9" onclick="Kleur(this)"></div><br><br>
        <div class="vak" id="10" onclick="Kleur(this)"></div><br><br>
        <div class="vak" id="11" onclick="Kleur(this)"></div><br><br>
        <div class="vak" id="12" onclick="Kleur(this)"></div>
      </div>
      <div class="column">
        <div class="vak" id="13" onclick="Kleur(this)"></div><br><br>
        <div class="vak" id="14" onclick="Kleur(this)"></div><br><br>
        <div class="vak" id="15" onclick="Kleur(this)"></div><br><br>
        <div class="vak" id="16" onclick="Kleur(this)"></div>
      </div>
    </form>
  </div>

    <script src="include.js">
    </script>
    <?php
      include('include.php');
    ?>
  </body>
</html>
