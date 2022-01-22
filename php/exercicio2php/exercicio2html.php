<html>
<head>
     <meta charset="utf-8"/>
     <title>Formulário</title> 
     <link rel="stylesheet" type="text/css" href="estiloexercicio2.css">
</head>
<body>
<form action = "index.php" method = "POST">
<fieldset>
<div id="title"><h3>Verifique se seu numero é divisiel por 10, 5, ou 2<br></h3>
</div>
    <p>              
     <input id="numero" name="n1" type="number" placeholder="Digite seu numero..."/>
    </p>  
     <input id="enviar" class="btn_submit" type="submit" value="Enviar">
    <br>
</fieldset>            
</form>
<?php
$value = $_POST['n1'] ;
if ($value % 10 == 0){
   echo $value  .  " é divisível por 10 <br> ";
}
else {   
   echo $value  .  "  não divisível por 10 <br> ";
}
if ($value % 5 == 0){
   echo $value  .  " é divisível por 5 <br> ";
}
else {   
   echo $value .  "  não divisível por 5 <br> ";
}
if ($value % 2 == 0){
   echo $value  .  " é divisível por 2 <br> ";
}
else {   
   echo $value  .  "  não divisível por 2 <br> ";
}
?>    
</body>    
<html>                
           