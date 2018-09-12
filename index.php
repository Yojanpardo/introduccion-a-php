<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Programación con php</h1>
    <h3>ejercicio para imprimir lo solicitado por el profe con el arreglo dado</h3>
    <?php
      $arreglo = [
	    ‘keyStr1’ => ‘lado’,
      0 => ‘ledo’,
	    ‘keyStr2’ => ‘lido’,
	    1 => ‘lodo’,
	    2 => ‘ludo’
    ];
      echo "<p>$arreglo[‘keyStr1’], $arreglo[0], $arreglo[‘keyStr2’], $arreglo[1], $arreglo[2]</p>";
      echo "<p>Decirlo al revéz lo dudo.</p>";
      echo "<p>$arreglo[2], $arreglo[1], $arreglo[‘keyStr2’], $arreglo[0], $arreglo[‘keyStr1’]</p>";
      echo "<p>Qué trabajo me ha costado</p>";
    ?>
  </body>
</html>
