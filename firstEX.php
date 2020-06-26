<?php

/*
Construir um algoritmo que leia 2 números e
efetue a adição. Caso o valor somado seja
maior que 20, este deverá ser apresentando
somando-se a ele mais 8; caso o valor
somado seja menor ou igual a 20, este deverá
ser apresentado subtraindo-se 5
 */

if(isset($_POST["firstValue"]) and ($_POST["secondValue"]) ){


    $firtNumber = $_POST["firstValue"];
    $secondNumber = $_POST["secondValue"];

    $soma = $firtNumber + $secondNumber;

    if($soma > 20){
        $newValue = $soma + 8;
        echo "A soma é: ".$newValue;
    } else{
        $newSecondValue = $soma - 5;

        echo "A soma é:" .$newSecondValue;
    }
   
}
?>

<html language="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Primeiro EX</title>

    <head>

    <body>
        <form method="post">
            <input type="text" name="firstValue" />
            <input type="text" name="secondValue" />
            <input type="submit" />
        </form>
    </body>

</html>