
<!--Entrar com nome, sexo e idade de uma
pessoa. 
Se a pessoa for do sexo feminino e
tiver menos que 25 anos, imprimir nome e a
a mensagem: ACEITA. 
Caso contrário,
imprimir nome e a mensagem: NÃO ACEITA.
-->

<html>
<head>
     <meta charset="utf-8"/>
     <title>Exercicio3php</title> 
     <link rel="stylesheet" type="text/css" href="exercicio3.css">
</head>
<body>
<form action = "index.php" method = "POST">
<fieldset id="fundo">
<div id="title"><h3>Cadastro Pessoal</h3><br></div>
    <div><input class="digite" name="name1" type="text" placeholder="Digite seu nome..."/></dive>        
    <div class="middle">
        <div>
            <label>Masculino</label>    
            <input name="sexo" type="radio" value="M"/>
        </div> 
        <div>
            <label>Feminino</label>
            <input name="sexo"type="radio" value="F"/>
        </div> 
        <div>
            <label>Outros</label>
            <input name="sexo"type="radio" value="O"/> 
        </div> 
    </div>
    <div>
        <input class="digite" name="age1" type="number" placeholder="Digite sua idade..."/>
    </div>  
    <input id="enviar" class="btn_submit" type="submit" value="Enviar">
</div>
</fieldset>            
</form>
<?php
$name = $_POST["name1"];
$sexo = $_POST["sexo"];
$age = $_POST["age1"];

if($name == null && $sexo == null && $age== null){
    echo ""; 
}
elseif($age <= 25 && $sexo === "F"){
    echo "<b>ACEITA</b>";
}
else{
    echo "<div class='digite'>NAO ACEITA</div>";
}
?>
</body>
</html>



