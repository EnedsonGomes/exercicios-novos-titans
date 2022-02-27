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
<?php
$imput1 = $_POST["nomedolivro"];
$imput2 = $_POST["TipodeUsuário"];

if (isset($_POST["nomedolivro"]) && isset($_POST["TipodeUsuário"])){

    if($imput2===Professor){
        echo "Você tem 10 dias a partir de hoje para devolver o livro:" . $imput1;
    }
    elseif($imput2===Aluno){
        echo "Você tem dias a partir de hoje para devolver o livro:" . $imput1;
    }
        unset ($_POST["nomedolivro"],$_POST["TipodeUsuário"]);
}
else {
   ?>
   <form action = "index.php" method = "POST">
            <div class="nomedolivro">Livro:</div>
            <input class="input" type="texto" placeholder="Digite o Nome do Livro..."/>
            <div class="TipodeUsuário">Usuário:</div>
            <select class="selecionar">
                <option></option>
                <option>Professor</option>
                <option>Aluno</option>
            </select>            
            <input type="submit" class="button" value="Salvar Dados">
        </form>
    </fieldset>   
</form>
<?php
}
?>
</body>
</html>    