<?php
$n1=$_GET['no1'];
$n2=$_GET['no2'];
$square=0;
for($i=$n1;$i<=$n2;$i++)
{ 
   if($i%2==0)
{
         $square=$i*$i;
             echo "\nSquare of ".$i." is".$square."<br>";
}
}
?>

     