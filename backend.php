<?php
include 'functions.php';

$a = (int)$_POST['a'];
$b = (int)$_POST['b'];
$c = (int)$_POST['c'];

$delta_valor = calc_delta($a, $b, $c);

var_dump($a);
var_dump($b);
var_dump($c);
var_dump($delta_valor);

$x1 = x1($a, $b, $c, $delta_valor);
$x2 = x2($a, $b, $c, $delta_valor);

var_dump($x1);
var_dump($x2);


connect_and_write_db($a, $b, $c, $delta_valor, $x1, $x2);



?>
