

<html>
<head>
    <meta charset="utf-8"/>
    <title>Exercicio4php</title> 
    <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>

<?php
$num1 = $_POST["n1"];
//$num1 = 6;
$num2 = $_POST["n2"];
//$num2 = 15;
$num3 = $_POST["n3"];
//$num3 = 5;

//var_dump(isset($num1), isset($_POST["n1"]));
//echo "<br/>";

if (isset($_POST["n1"]) && isset($_POST["n2"]) and isset($_POST["n3"])){

    if($num1===$num2 || $num2===$num3 || $num3===$num1){
        echo "Digite 3 numeros diferentes";
    }
    elseif ($num1===$num2 && $num2===$num3 && $num3===$num1){
    echo "";
    }
    elseif ($num1<$num2 && $num2<$num3){
        echo "Os três números na ordem decrescente é $num3, $num2 e $num1.";
    }
    elseif ($num1<$num3 && $num3<$num2) {
    echo "Os três números na ordem decrescente é $num2, $num3 e $num1.";
    }
    elseif ($num2<$num1 && $num1<$num3) {
    echo "Os três números na ordem decrescente é $num3, $num1 e $num2.";
    }
    elseif ($num2<$num3 && $num3<$num1) {
    echo "Os três números na ordem decrescente é $num1, $num3 e $num2.";
    }
    elseif ($num2<$num1 && $num3<$num2) {
    echo "Os três números na ordem decrescente é $num1, $num2 e $num3.";
    }
    elseif ($num1<$num2 && $num3<$num2) {
    echo "Os três números na ordem decrescente é $num2, $num1 e $num3.";
    }
    elseif ($num3<$num1 && $num1<$num2) {
    echo "Os três números na ordem decrescente é $num1, $num3 e $num2.";
    }
    unset ($_POST["n1"],$_POST["n2"],$_POST["n3"]);
}
else {
   ?>
   <form action = "index.php" method = "POST">
    <fieldset class="fundo">
    <div id="title"><h3>Checagem de Número</h3><br></div>
    <div><input class="digite" name="n1" type="number" placeholder="Digite o numero..."/></div> 
    <p>        
    <div><input class="digite" name="n2" type="number" placeholder="Digite o numero..."/></div>
    </p>
    <div><input class="digite" name="n3" type="number" placeholder="Digite o numero..."/></div>
    <p>
    </div>  
    <input class="enviar" class="btn_submit" type="submit" value="Enviar">   
    </p>
    </fieldset>            
</form>
<?php
}
?>
</body>
</html>
    
    