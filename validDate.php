<?php

include 'index.php';

// Criando uma base de dados
$arquivo = fopen("database.csv", "r");

$tarifas = [];
while($row = fgetcsv($arquivo, 50, ",")){
    $tarifas[] = $row;
}

// Recebendo variaveis
$valor_far = $_POST['valor_far'];
$date = $_POST['date'];

$datai = date('Y-m-d', strtotime('-6 months'));

 foreach($tarifas as $tarif){
    if($tarif[1] >= $datai){
        if($tarif[0] == $valor_far){
            echo 'Este valor de tarifa foi inserido nos últimos seis meses';
            exit();
        }
    }
}

 fclose($arquivo);

 $new_far  = [
    0 => $valor_far,
    1 => $date
 ];

 $arquivo = fopen("database.csv", "w");
 array_push($tarifas, $new_far);

 foreach($tarifas as $tar){
    fputcsv($arquivo, $tar);
 }

 
?>