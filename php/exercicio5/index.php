<html>
<head>
    <meta charset="utf-8"/>
    <title>Exercicio4php</title> 
    <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>

<?php
$num1 = $_POST["n1"];
//$num1 = 2;
$num2 = $_POST["n2"];
//$num2 = 2;
$num3 = $_POST["n3"];
//$num3 = 2;
if (isset($_POST["n1"]) && isset($_POST["n2"]) and isset($_POST["n3"])){

    if($num1===$num2 && $num2===$num3 && $num3===$num1){
        echo "Triangulo Equilátero";
    }
    elseif($num1<>$num2 && $num2<>$num3 && $num3<>$num1){
        echo "Triangulo Escaleno";
    }
    elseif ($num1===$num2 && $num2<>$num3 || $num3<>$num1){
        echo "Triangulo Isóceles ";
    }
        elseif ($num2===$num3 && $num3<>$num1 || $num3<>$num2){
            echo "Triangulo Isóceles ";
    }
    elseif ($num3===$num1 && $num1<>$num2 || $num2<>$num3){
        echo "Triangulo Isóceles ";
    }
        unset ($_POST["n1"],$_POST["n2"],$_POST["n3"]);
}
else {
   ?>
   <form action = "index.php" method = "POST">
    <fieldset class="fundo">
    <div id="title"><h3>Checagem de Número</h3><br></div>
    <div><input class="digite" name="n1" type="number" placeholder="Digite o numero..."/></div> 
    <br>        
    <div><input class="digite" name="n2" type="number" placeholder="Digite o numero..."/></div>
    </br>
    <div><input class="digite" name="n3" type="number" placeholder="Digite o numero..."/></div>
    <br>
    <input class="enviar" class="btn_submit" type="submit" value="Enviar">   
    </br>
    </fieldset>            
</form>
<?php
}
?>
</body>
</html>    