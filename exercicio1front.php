<html>
<head>
    <title>Exercicio1</title>
    <link rel="stylesheet" type="text/css" href="estiloexercicio1.css">
</head>
<body>
        
<form action = "exercicio1back.php" method = "POST" >
  <div id="area"></div>
  <fieldset>
    <legend>Formulário</legend>
    <input name ="n1" type="number"><br>
    <input name="n2" type="number"><br>
    <label>resultado:</label><br><textarea class="Resultado" type="number" cols="10" rows="2"></textarea><br><br>
    <input class="btn_submit" type="submit" value="Enviar">
  </fieldset>
  </div>
</form>
            
<?php

  $value1 = $_POST['n1'];
  $value2 = $_POST['n2'];
 
  $sum = $_POST['n1'] + $_POST['n2'];
         
  if ($sum > 20) {
    $sum = $sum + 8;
    $sum += 8;  
}
  else{
    $sum -= 5;
}  

  echo 'o resultado da soma é ' . $sum . "\n";
 
?>

</body>    
</html>