<!--Entrar com 20 números e imprimir a soma
dos positivos e o total de números negativos
-->

<html>
<head>
    <meta charset="utf-8"/>
    <title>Exercicio10php</title> 
    <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
<div class="enunciado"> Prencher 20 numeros e submeter ao código</div>

<?php
 showResult();
 function showResult(){
			$vetor = '';
			$pos = '';
			$neg = '';		
			
			if(isset($_POST['n1'])) {
						
				$numeros = $_POST['n1'];
						
				$vetor= explode (" ", $numeros);
				$pos=array();
				$neg=array();
					
				foreach($vetor as $vet){
					($vet <= 0) ? $neg[]=$vet : $pos[]=$vet;
				} 
				echo "<div class='results'>\n</div>" . "<div class='results'>Os vetores positivos são:</div>" . "<div class='results'>\n</div>" . "<div class='results'>\n</div>";
				print_r($pos);
							
				echo "<div class='results'>\n</div>" . "<div class='results'>Os vetores negativos são:</div>" . "<div class='results'>\n</div>" . "<div class='results'>\n</div>";
				print_r($neg);
					
				$total = array_sum($pos);
				$count = count($neg);
					
				echo "<div class='results'>\n</div>" . "</div><div class='results'>Soma dos positivos: $total</div>";
				echo "<div class='results'>\n</div>" . "</div><div class='results'>Quantidade de negativos: $count</div>";
			}
        }
?>
<form action = "index.php" method = "POST">
    <fieldset class="fundo">
        <div id="title"><h3>Seleção de Números</h3><br></div>
        <div><input class="input-field" name="n1" type="text" placeholder="Digite os numeros..."/></div> 
        <input class="enviar" class="btn_submit" type="submit" value="Enviar">   
    </fieldset>            
</form>
</body>
</html>