<?php

     $value1 = $_POST['n1'];
     $value2 = $_POST['n2'];
 
     $sum = $_POST['n1'] + $_POST['n2'];
         
     if ($sum > 20) {
         $sum = $sum + 8; 
         echo 'o resultado da soma é ' . $sum . "\n"; 
     }
     else{
         $sum -= 5;
     echo 'o resultado da soma é ' . $sum . "\n";
     }
     
 
 ?>