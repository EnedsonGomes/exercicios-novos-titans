<?php
$value = $_POST['n1'];

if ($_POST['n1'] % 10 == 0){
   echo  "$_POST['n1'] é divisível por 10 <br>";
}
else {   
   echo  $_POST['n1'] . "não divisível por 10 <br> ";
}

if ($_POST['n1'] % 5 == 0){
   echo  $_POST['n1'] . " é divisível por 5 <br> ";
}
else {   
   echo  $_POST['n1'] . "não divisível por 5 <br> ";
}

if ($_POST['n1'] % 2 == 0){
   echo $value . " é divisível por 2 <br> ";
}
else {   
   echo $_POST['n1'] . "não divisível por 2 <br> ";
}
?>