<!--Entrar com o número de vezes que se deseja
imprimir a palavra SOL e imprimir
-->

<html>
    <head>
         <meta charset="utf-8"/>
         <title>Exercicio9php</title> 
         <link rel="stylesheet" type="text/css" href="estilo.css">
    </head>
    <body>
    <div class="enunciado"> Entrar com o numero de vezes que deseja imprimir a palavra Sol e imprimir.</div>
<?php
    showResult();
    function showResult(){
    if (isset($_POST["n1"])){
    if ($num <0){
        echo "digite um numero maior que 0";
        }
    else{
        for($i=0; $i<$_POST["n1"]; $i++){
            echo "<div class='results'>SOL</div>";
        }
    }
}
}
?>
<form action = "index.php" method = "POST">
<fieldset class="fundo">
    <div id="title"><h3>Número de Impressão</h3><br></div>
    <div><input class="digite" name="n1" type="number" placeholder="Digite o numero..."/></div>
    <input class="enviar" class="btn_submit" type="submit" value="Enviar">   
</fieldset>            
</form>
</body>
</html>