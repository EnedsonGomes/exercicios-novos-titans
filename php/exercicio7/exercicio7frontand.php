<!--A biblioteca de uma universidade deseja fazer
um algoritmo que leia o nome do livro que
será emprestado, o tipo de usuário (professor
ou aluno) e possa imprimir um recibo
conforme mostrado a seguir. Considerar que
o professor tem 10 dias para devolver o livro
o aluno somente 3 dias
-->
<html>
    <head>
         <meta charset="utf-8"/>
         <title>Exercicio7php</title> 
         <link rel="stylesheet" type="text/css" href="estilo.css">
    </head>
    <body>
    <div class="enunciado"> Digite o nome do livro que será emprestado e selecione o usuário. </div>
    <fieldset class="fundo">
    <div class="title">Controle de Biblioteca</div>
    <form action = "index.php" method = "POST">
            <div class="nomedolivro">Livro:</div>
            <input class="input" type="texto" placeholder="Digite o Nome do Livro..."/>
            <div class="TipodeUsuário">Usuário:</div>
            <select class="selecionar">
                <option></option>
                <option>Professor</option>
                <option>Aluno</option>
            </select>            
            <div button class="button">Salvar Dados</button></div>
        </form>
    </fieldset>
    </body>
</html>