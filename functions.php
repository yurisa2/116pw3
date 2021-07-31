<?php


function calc_delta($a, $b, $c)
{
  $delta = ($b * $b) - (4 * $a * $c);

  if($delta >= 0) {
    $resultado = $delta;
  } else {
    $resultado = 'NAO EXISTE';
  }
  return($resultado);
}

function x1($a, $b, $c, $delta)
{
  $x1 = (-$b + sqrt($delta)) / (2 * $a);
  return $x1;
}

function x2($a, $b, $c, $delta)
{
  if($delta == 0 ) {
    $x2 = NULL;
  } else {
    $x2 = (-$b - sqrt($delta)) / (2 * $a);
  }
  return $x2;
}


function get_insert_sql($a, $b, $c, $delta, $x1, $x2)
{
  $query = "insert into calculos (a, b, c, delta, x1, x2) values ('$a','$b','$c','$delta','$x1', '$x2')";
  return($query);
}

function connect_and_write_db($a, $b, $c, $delta, $x1, $x2){
  $conn = mysqli_connect('localhost', 'root', '', 'bhaskara');

  $query = get_insert_sql($a, $b, $c, $delta, $x1, $x2);

  $result = mysqli_query($conn, $query);
}

 ?>
