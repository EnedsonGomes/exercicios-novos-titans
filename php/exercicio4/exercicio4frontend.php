

<!--Entrar com 3 números e imprimi-los em
ordem decrescente (suponha números
diferentes).
-->
<html>
    <head>
         <meta charset="utf-8"/>
         <title>Exercicio4php</title> 
         <link rel="stylesheet" type="text/css" href="estiloformulario.css">
    </head>
    <body>
    <div class="enunciado">Entrar com 3 números e imprimi-los em
ordem decrescente (suponha números
diferentes). </div>
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
    </body>
    </html>