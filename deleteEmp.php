<?php 

include_once 'manager.php';
include_once 'employe.php';


$mananger = new Manager();

$employe = $mananger->read($_GET['id']);

 $deleteIsOk = $mananger->delete($employe);

 if ($deleteIsOk)
 {
 	header("location:readAll_employe.php");
 }
 else
 {
 	$message = 'Echec de suppression';
 }
 ?>

 <!DOCTYPE html>
<html lang='en'>
<head>
	<meta charset="UTF_8">
	<title>SOMMAIRE</title>
</head>
<body>
   <H1>Resultat de suppression du membre</H1>
   
   <?= $message ?>
</body>
</html>