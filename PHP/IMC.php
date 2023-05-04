<?php

function calcIMC($peso, $altura){
        $imc = $peso/ ($altura *$altura);
        //echo "$imc";
        $resultado =  match($imc){
            ($imc < 18.45 )=>'Você está abaixo do peso',
            (  $imc > 18.80 && $imc > 30) => 'Você está no peso ideal',
            ($imc > 30 ) => 'Você está acima do peso',
            default => throw new \Exception('Unexpected match value'),
        };

        return $resultado;

}


?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            IMC
        </title>
    </head>
    <body>

    <form action="IMC.php" method="POST" >
        <label for="altura">Digite a sua altura</label>
        <input id="altura" type="text" name="altura">
        <label for="peso">Digite seu peso</label>
        <input id="peso" type="text" name="peso">
        <input type="submit" name="submit" >
    </form>
    <br>
    <br>
    <p>Seu Imc é:<?php echo calcIMC($_POST['peso'], $_POST['altura']) ?>  </p>

    </body>
</html>



