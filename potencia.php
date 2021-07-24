<?php

function potencia($num, $pot)
{
  // se o expoente for 0 retorne 1
  if ($pot == 0) {
    return 1;
  }

  // se expoente for negativo
  if ($pot < 0) {
    $num = 1 / $num;
    $pot = $pot * -1;
  }

  $result = $num;
  for ($i = 1; $i < $pot; $i++) {
    $result = $result * $num;
  }
  return $result;
}

$num = $_POST['num'];
$pot = $_POST['pot'];

$resultado = potencia($num, $pot);

echo $resultado;
