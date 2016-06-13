<?php 
/*PHP OOP yaxinlasmasinnan istifade ederek iki tarix arasindaki ferqi tapin.
Qeyd: Uzun hesablamalar aparmaga ehtiyac yoxdur. maksimum 4 setirle hell edin*/

$tarix1=date_create("2013-03-15");
$tarix2=date_create("2013-12-12");
$diff=date_diff($tarix1,$tarix2);
echo $diff->format("%R%a days");




 ?>