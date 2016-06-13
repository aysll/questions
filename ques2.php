<?php
class Telebe {
 
  public $ad="Memmed";
  public $soyad="Hesenov";

 
  public function qarsila()
  {
     echo $this->ad." ".$this->soyad." ";

  }
 

  public function qeydiyyataAl()
  {
  	 echo "sizin muracietiniz qeyde alindi ";
  	  
  	  return new Telebe();
     

  }
 

  public function melumatlandir()
  {
 echo "ve size email gonderildi.Tesekkurler";
  }
}
 
$telebe01 = new Telebe();
$telebe01 -> ad = "Memmed";
$telebe01 -> soyad = "Hesenov";
$telebe01-> qarsila();
$telebe01->qeydiyyataAl()->melumatlandir();
?>