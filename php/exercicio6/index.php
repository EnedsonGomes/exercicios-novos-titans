<!--Ler um número inteiro entre 1 e 12 e escrever
o mês correspondente. Caso o número seja
fora desse intervalo, informar que não existe
mês com este número
-->
<html>
<head>
    <meta charset="utf-8"/>
    <title>Exercicio6php</title> 
    <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
<div class="enunciado">Ler um número inteiro entre 1 e 12 e escrever
                      o mês correspondente. <br> Caso o número seja
                      fora desse intervalo,<br> Informar que não existe
                      mês com este número. </div>

<?php
$num1 = $_POST["n1"];

if (isset($_POST["n1"])){

    if($num1==1){
        echo "JANEIRO";
    }
    elseif ($num1==2){
        echo "FEVEREIRO";
    }
    elseif ($num1==3){
        echo "MARÇO";
    }
    elseif ($num1==4){
        echo "ABRIL";
    }
    elseif ($num1==5){
        echo "MAIO";
    }
    elseif ($num1==6){
        echo "JUNHO";
    }
    elseif ($num1==7){
        echo "JULHO";
    }
    elseif ($num1==8){
        echo "AGOSTO";
    }
    elseif ($num1==9){
        echo "SETEMBRO";
    }
    elseif ($num1==10){
        echo "OUTUBRO";
    }
    elseif ($num1==11){
        echo "NOVEMBRO";
    }
    elseif ($num1==12){
        echo "DEZEMBRO";
    }
    elseif ($num1>12){
        echo "NÃO HÁ MÊS CORRESPONDENTE";
    }
    elseif ($num1<1){
        echo "NÃO HÁ MÊS CORRESPONDENTE";
    }
    unset ($_POST["n1"]);
}
else {
   ?>
       <form action = "index.php" method = "POST">  
        <fieldset class="contorno"> 
            <div id="title"><h1>Mês Correspondente</h1></div>
            <fieldset class="fundo">
                <div><input class="digite" name="n1" type="number" placeholder="Mês de nascimento..."/></div> 
            </fieldset>
            <input class="enviar" type="submit" value="Enviar">   
        </fieldset>                     
</form>
<?php
}
?>
</body>
</html>  
