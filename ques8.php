
<!-- //1.Ededin faktorialini hesablayan Class yazin//
 -->
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action = "" method = "POST">
	<input type="number" name="number">
	<input type="submit" value="Hesabla" name="bera">
	

</body>
</html>

<?php
$a=1;
	function hesabla(){
		global $a;
	for($i=$_POST["number"]; $i>1;$i--){
	  
		$a=$a*$i;

	}
	echo $a;
}
  hesabla();

?>