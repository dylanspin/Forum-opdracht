<?php
error_reporting(1);
$een = $_POST['1']; $zeven = $_POST['7']; $dertien = $_POST['13'];
$twee = $_POST['2'];$acht = $_POST['8'];  $veertien = $_POST['14'];
$drie = $_POST['3'];$negen = $_POST['9']; $vijftien = $_POST['15'];
$vier = $_POST['4'];$tien = $_POST['10']; $zestien = $_POST['16'];
$vijf = $_POST['5'];$elf = $_POST['11'];
$zes = $_POST['6']; $twaalf = $_POST['12'];

//mischien een swich gebruiken en this gebruiken als dat kan zo als bij js 
if(isset($een)){ echo "<h1>dit is een</h1>";}
elseif (isset($twee)){ echo '<style=button{"background-color:#1B63DF"}>';;}
elseif (isset($drie)){ echo '<body style="background-color:red">';;}
elseif (isset($vier)){ echo"<h1>dit is vier</h1>";}
elseif (isset($vijf)){ echo"<h1>dit is vijf</h1>";}
elseif (isset($zes)){ echo"<h1>dit is zes</h1>";}
elseif (isset($zeven)){ echo"<h1>dit is zeven</h1>";}
elseif (isset($acht)){ echo"<h1>dit is acht</h1>";}
elseif (isset($negen)){ echo"<h1>dit is negen</h1>";}
elseif (isset($zestien)){ echo"<h1>dit is zestien</h1>";}
 ?>
