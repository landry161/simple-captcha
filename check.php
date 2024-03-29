<?php
	session_start();
$status = '';
if ( isset($_POST['captcha']) && ($_POST['captcha']!="") ){
// Validation

if($_SESSION["captcha"]==$_POST["captcha"]){
	//echo "Le code entré est correcte";
	echo "<p style='color:#FFFFFF; font-size:20px'><span style='background-color:#46ab4a;'>Captcha Correct</span></p>";
}else{
	//echo "Erreur de code";
	echo "<p style='color:#FFFFFF; font-size:20px'><span style='background-color:red'>Captcha incorrect</span></p>";	
}
}
?>