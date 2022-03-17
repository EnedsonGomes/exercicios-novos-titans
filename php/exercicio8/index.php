<!--Criar um algoritmos que leia um número e
imprima todos os número de 1 até ele e o seu
produto.
-->

<html>
    <head>
         <meta charset="utf-8"/>
         <title>Exercicio8php</title> 
         <link rel="stylesheet" type="text/css" href="estilo.css">
    </head>
    <body>
    <div class="enunciado">Entrar com um número, enviar e aguardar a impressão a partir de 01 até ele, e o seu
produto. </div>
<?php

/**
 * Essa função limpa o vetor de array, colocando todos como unset.
 */
function cleanArray($array) {
    foreach($array as $key => $value) {
        unset($array[$key]);
    }
}

function processValues ($dados) {
    $num = $dados["n1"];
    $produto = 1;

    if($num <= 0){
        echo "Digite um numero maior que 0";
    }
    else {
        $count = 0;
        for ($i = 1; $i <= $num; $i++){
            echo "$i" . ",";
            // $produto = $produto * $i
            $produto *= $i;
        }
        echo " O produto é: $produto";
    }
}

if (isset($_POST["n1"])){
    processValues($_POST);
    cleanArray($_POST);
}
else {
   ?>
<form action = "index.php" method = "POST">
    <fieldset class="fundo">
        <div id="title"><h3>Checagem de Produto</h3><br></div>
        <div><input class="digite" name="n1" type="number" placeholder="Digite o numero..."/></div>
        <input class="enviar" class="btn_submit" type="submit" value="Enviar">   
    </fieldset>            
    </form>
<?php
}
?>
</body>
</html>