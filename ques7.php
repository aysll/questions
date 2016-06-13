<?php 
//sort() funksiyasindan istifade ederek tam ededlerden ibaret array-in elementlerini sort eden Class yazin.//
$numb=array(2,3,6,1);
sort($numb);
$arraylength=count($numb);
for($i=0;$i<$arraylength;$i++)
{
	echo $numb[$i]."<br>";
}


 ?>