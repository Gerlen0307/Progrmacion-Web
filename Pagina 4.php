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
<h1 align="center"> <font color="black"> Numeros aleatorios </font></h1>
</fieldset>

 <center 
 <strong>
 <?php

  $numero = rand(1, 3);
  if ($numero == 1) {
    echo " el valor del numero es : uno";
  } else {
    if ($numero == 2) {
      echo "el valor del numero es : dos";
    } else {
      echo "el valor del numero es : tres";
    }
  }

  ?>

</body>

</html>
