<!DOCTYPE HTML>
<html>
<head>
<title>HSc Results</title>
<link rel="stylesheet" type="text/css" href="style-sign.css">
</head>

<body id="body-color" bgcolor="#E0ECF8">
<fieldset style="width: 100%; opacity: 0.5; background-color: white">
<h3> HSc Results </h3>
</fieldset>
<div id="Sign-In" align="center">
<fieldset style="width: 40%; opacity: 0.9; background-color: #B0C4DE" ><legend>Enter your ECode</legend>
<form method="POST" action="hscresults.php">
<div align="right">E-Code :<input type="text" name="user" size="40"><br></div>
<input id="button" type="submit" name="submit" value="submit"></form>
</fieldset>
</div>

<?php 

	$ecode1 = KIMS101DEC001;
	 
	
	$ecode=htmlentities(trim($_POST["ecode"]));
	

?>

</body>


</html>
