<?php
//Entrar com um número 
//Informar se ele é divisível por 10, por 5, por 2 
//Ou se não é divisível por nenhum destes

//$value = $_POST['n1'];
$value = 45;
isDivisible($value, 10);
isDivisible($value, 5);
isDivisible($value, 2);
isDivisible($value, 7);

function isDivisible($param, $divider){
   /*if ($param % $divider == 0)
      echo $param . " é divisível por $divider " . PHP_EOL;
   else   
      echo $param . " não divisível por $divider " . PHP_EOL;*/
   $message = $param % $divider == 0 ? $param . " é divisível por $divider " . PHP_EOL : $param . " não é divisível por $divider " . PHP_EOL;
   echo $message;
}
?>