<?php
class ClasseA
{
  // https://www.php.net/manual/pt_BR/language.oop5.decon.php
  function __construct()
  {
    echo 'oi eu estou dentro do construtor';
  }

  function soma()
  {
    $this->resultado = $this->a + $this->b;
  }

}
echo '<pre>';

$objeto = new ClasseA;
echo '<br>';
var_dump($objeto);

$objeto->variavel_b = 'Conteudo da var';

$objeto->a = 3;
$objeto->b = 10;

$objeto->soma();


var_dump($objeto);



 ?>
