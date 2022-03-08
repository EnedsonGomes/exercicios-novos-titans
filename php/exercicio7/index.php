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
        <div>
            <label for="nomedolivro" class="nomedolivro"></label>
            <input required class="input" name="nomedolivro" type="texto" placeholder="Digite o Nome do Livro..."/>
        </div>    
        <select value="" placeholder="selecione" required name="TipodeUsuario" class="selecionar">
            <option></option>
            <option value="Professor">Professor</option>
            <option value="Aluno">Aluno</option>
        </select>   
        <input type="submit" class="button" value="Salvar Dados">
    </form>
</fieldset> 
<?php
$bookName = $_POST["nomedolivro"];
$userType = $_POST["TipodeUsuario"];
    if($userType=="Professor"){
        echo "Você tem 10 dias a partir de hoje para devolver o livro:" . $bookName;
    }
    elseif($userType=="Aluno"){
        echo "Você 03 tem dias a partir de hoje para devolver o livro:" . $bookName;
    }
?>
</body>
</html>   