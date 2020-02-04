<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lirios</title>
</head>
<body bgcolor="#F6D3CC">
<fieldset>
<h1 align="center"> <font color="black"> La tabla de multiplicacion del 2  </font></h1>
</fieldset>

 <center 
 <strong>
 <?php
  

  echo "Tabla del 2 con el for";
  echo "<br>";
  for ($i = 2; $i <= 20; $i = $i + 2) {
    echo $i;
    echo "-";
  }
  echo "<br>";
  echo "<br>";
  echo "Tabla del 2 con el while";
  echo "<br>";
  $i = 2;
  while ($i <= 20) {
    echo $i;
    echo "-";
    $i = $i + 2;
  }
  echo "<br>";
  echo "<br>";

  echo "Tabla del 2 con el do/while";
  echo "<br>";
  $i = 2;
  do {
    echo $i;
    echo "-";
    $i = $i + 2;
  } while ($i <= 20);

  ?>

</body>

</html>







