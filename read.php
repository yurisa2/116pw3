<?php

function connect_db(){
  $conn = mysqli_connect('localhost', 'root', '', 'bd_locadora');

  return $conn;
}

function get_tb_sql($table)
{
  $query = "select * from " . $table;

  return $query;
}

function get_results($connDB, $sqlQuery)
{
  $result = mysqli_query($connDB, $sqlQuery);

  $final = array();

  while ($linha = mysqli_fetch_assoc($result)) {
    $final[] = $linha;
  }

  return $final;
}


function generate_html_table($arrayEntrada)
{
  $table = '<table class="table">';

  foreach ($arrayEntrada as $linha => $coluna) {
    $table .= '<tr>';
    foreach ($coluna as $key => $celula) {
      $table .= '<td>';
        $table .= $celula;
      $table .= '</td>';
    }
    $table .= '</tr>';
  }

  $table .= '</table>';

  return $table;
}

$conexao_bd = connect_db();
$sql_tb_cliente = get_tb_sql('tb_cliente');
$sql_tb_cargo= get_tb_sql('tb_cargo');
$sql_tb_modelo = get_tb_sql('tb_modelo');

$tb_cliente_array = get_results($conexao_bd, $sql_tb_cliente);
$tb_cargo_array = get_results($conexao_bd, $sql_tb_cargo);
$tb_modelo_array = get_results($conexao_bd, $sql_tb_modelo);

$html_tb_cliente = generate_html_table($tb_cliente_array);
$html_tb_cargo = generate_html_table($tb_cargo_array);
$html_tb_modelo = generate_html_table($tb_modelo_array);



$htmlHead = '<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Table HTML</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  </head>
  <body>';

$htmlBottom = '
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
';



echo $htmlHead . $html_tb_cliente . $html_tb_cargo . $html_tb_modelo . $htmlBottom;


 ?>
