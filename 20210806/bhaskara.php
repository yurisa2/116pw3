<?php
include 'funcoes.php';
echo '<pre>';

$a = 12;
$b = 1;
$c = 12;

$a_valores = array();
$b_valores = array();
$c_valores = array();

for ($i=-20; $i <= 20; $i++) {
  $a_valores[] = $i;
  $b_valores[] = $i;
  $c_valores[] = $i;
}

$resultados = array();

foreach ($a_valores as $chave_a => $valor_a) {
  foreach ($b_valores as $chave_b => $valor_b) {
    foreach ($c_valores as $chave_c => $valor_c) {
      $resultado_temp = calc_bhaskara($valor_a, $valor_b, $valor_c);
      if($resultado_temp != NULL && $resultado_temp['x1'] != NULL && $resultado_temp['x2'] != NULL){
      $resultados[] = $resultado_temp;
    }
    }
  }
}

var_dump($resultados);

// $result = calc_bhaskara($a, $b, $c);

// var_dump($result);


 ?>
