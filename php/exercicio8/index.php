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

$num = $_POST["n1"];
$i = $_POST["n1"];
$p = 1;

if (isset($_POST["n1"])){

    if($num <= 0){
        echo "Digite um numero maior que 0";
    }
    else {
        for ($i=1; $i <= $num; $i++){
            echo "$i" . "";
            $p = $p * $i;
        }
        echo " O produto é: $p";
        unset ($_POST["n1"]);
    }
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