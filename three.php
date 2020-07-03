
<!--
    Entrar com nome, sexo e idade de uma pessoa. 
    Se a pessoa for do sexo feminino e tiver menos que 25 anos, 
    imprimir nome e a a mensagem: ACEITA. 
    Caso contrário, imprimir nome e a mensagem: NÃO ACEITA.
 -->


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post">
        <label>Digite seu nome</label>
        <input type="text" name="nome">
        <br>
        <br>
        <label>Informe seu sexo </label>
        <input type="text" name="sexo">
         <br>
        <br>
        <label>Digite a sua idade</label>
        <input type="number" name="idade" min="1" max="100"/> 
        <br>
        <input type="submit" value="cadastrar" />
    </form>

</body>

</html>


<?php
    if(isset($_POST["sexo"], $_POST["idade"])){

    $idade = $_POST["idade"];   
    $sexo = $_POST["sexo"];

    if($sexo == "feminino" and  $idade < 25){
        echo "Aceito";
    }
    elseif($sexo == "masculino" and $idade >= 0){
        echo "Não aceito";
    }
    else{
        echo "Não aceito"; 
    }
    
    

    }

?>