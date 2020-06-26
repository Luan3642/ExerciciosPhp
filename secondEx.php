<?php
/*
Entrar com um número e informar se ele é divisível por 10, 
por 5, por 2 ou se não é divisível por nenhum deste
*/
if(isset($_POST["number1"])){
    $firstNumber = $_POST["number1"];

    if($firstNumber % 10 == 0){
        echo "O número: ". $firstNumber . " é divisível por 10, 5 e por 2"; 
    }elseif($firstNumber % 5 == 0){
        echo "O número: ". $firstNumber . " é divisível por 5";
    }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <form method="post">
        <input placeholder="Entre com um número" name="number1"/>
        <input type="submit"/>
    </form>
    
</body>
</html>
