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
    <div id="title"><h3>Controle de Biblioteca</h3><br></div>
    <form action = "index.php" method = "POST">
            <label>Livro:</label>
            <input type="texto" placeholder="Digite o Nome do Livro..."/>
            <br /><br /> 
            <label>Usuário</label>
            <select>
                <option>Professor</option>
                <option>Aluno</option>
            </select>
            <br>
            <br>
            
            <button>Salvar Dados</button>
        </form>
    </body>
</html>