<!-- // Shirket ucun Ishcilerin siyahisi yaradilmalidir, yaradilan butun ishcilerin siyahisi table sheklinde muvafiq melumatlarla ekrana cixmali ve hal hazirki gunde dogum gunu olan ishcinin melumatlari qirmizi rengle yazilmalidir. -->

<!-- / -->
<body>
<table>
	<tr>
		<td>Ad</td>
		<td>Soyad</td>
		<td>Status</td>
		<td>Dogum tarixi</td>
	</tr>
	
</table>
</body>
</html>
<?php 
class Workers {
	public $name;
	public $surname;
	public $position;
	public $birthDate;
	
	public function addWorker($name,$surname,$position,$birthDate){
echo "<tr>
		<td>".$name."</td>
		<td>".$surname."</td>
		<td>".$position."</td>
		<td>".$birthDate."</td>
	</tr>";
        
	
		}
}
$array1=new Workers;
$array1->addWorker("aysel","quliyeva","telebe","13/06/2016");
?>