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
    <form action = "index.php" method = "POST">  
        <fieldset class="contorno"> 
            <div id="title"><h1>Mês Correspondente</h1></div>
            <fieldset class="fundo">
                <div><input class="digite" name="n1" type="number" placeholder="Mês de nascimento..."/></div> 
            </fieldset>
            <br>
            <br>
            <input class="enviar" type="submit" value="Enviar">   
            <br>
        </fieldset>            
    </form>
</body>
</html>