<!--  verilen Telebe class struktrunu ele qurmaq lazımdır ki,

$telebe01 -> qeydiyyataAl() -> melumatlandir();

 komandasını işe saldıgınız zaman ekrana 
   "Salam Memmed Hesenov!.Sizin müracietiniz qeyde alındı ve size email gönderildi.Teşekkürler" 
 ifadesi cıxsın

 */ -->

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		input{
			display:block;
			padding:5px 10px;
			margin:5px;
		}
		input[type="radio"]{
			display:inline-block;
		}
		p{
			background:gray;
		}
	</style>
</head>
<body>
<form action = "<?php $_PHP_SELF ?>" method = "POST">
	<input type="number" name="num01">
	<input type="number" name="num02">
	<span>+</span><input type='radio' name="hesab" value="+">
	<span>-</span><input type="radio" name="hesab" value="-" >
	<span>*</span><input type="radio" name="hesab" value="*">
	<span>/</span><input type="radio" name="hesab" value="/">
	<input type="submit" value="Hesabla" name="bera">
	<p>Netice:</p>
</form>
</body>
</html>
 <!-- forması yuxarıda verilen besit hesablama masını yazın  -->
 <?php 
 if($_POST["hesab"]=="+"){
	 echo $_POST["num01"] + $_POST["num02"]."<br>";

 }
 else if($_POST["hesab"]=="-"){
 	echo $_POST["num01"] - $_POST["num02"]."<br>";
 }
 else if($_POST["hesab"]=="*"){
 	echo $_POST["num01"] * $_POST["num02"]."<br>";
 }
 else
 {
 	echo $_POST["num01"] / $_POST["num02"]."<br>";
}
 ?>