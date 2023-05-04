<!DOCTYPE html>
<head>
    <title> numeros impares ate 100</title>
</head>

<body>

<?php

const parada =  100;

$numero_impar = 0;

$listaNumeros = array();


for( $cont =0 ; $cont <= parada; $cont++){

  if(NumeroImpar($numero_impar)){
      $listaNumeros[] = $numero_impar;

  }
        $numero_impar++;
}






function NumeroImpar($numero_impar){


    return ($numero_impar%2 == 1) ? true : false;


} ?>

<table>
    <tr>
        <th></th>
        <?php foreach ($listaNumeros as $list) {?></tr>

    <td><?php
    echo "$list"; ?></td
    <tr><?php  }       ?>

    </tr>
</table>

</body>



