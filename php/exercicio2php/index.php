<?php
//Entrar com um número 
//Informar se ele é divisível por 10, por 5, por 2 
//Ou se não é divisível por nenhum destes

//$value = $_POST['n1'];
$value = $_POST['n1'] ;

if ($value % 10 == 0){
   echo $value . " é divisível por 10 <br> ";
}
else {   
   echo $value . "não divisível por 10 <br> ";
}

if ($value % 5 == 0){
   echo $value . " é divisível por 5 <br> ";
}
else {   
   echo $value . "não divisível por 5 <br> ";
}

if ($value % 2 == 0){
   echo $value . " é divisível por 2 <br> ";
}
else {   
   echo $value . "não divisível por 2 <br> ";
}


        //($_POST['n1']/5 == 0);
        //($_POST['n1']/2 == 0);

        //echo 'Sim';


     //else{
        //($_POST['n1']/10  0);
        //($_POST['n1']/5 == 0);
        //($_POST['n1']/2 == 0);
     

     //echo 'o resultado da soma é ' . $sum . "\n";
 


