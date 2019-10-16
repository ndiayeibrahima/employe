<?php 
include_once 'manager.php';
include_once 'employe.php';


$manager = new Manager();

$employe = $manager->read($_POST['id']);

$employe->setNom($_POST['nom']);
$employe->setPrenom($_POST['prenom']);
$employe->setEmail($_POST['email']);
$employe->setPays($_POST['pays']);
$employe->setTel($_POST['tel']);
$employe->setSalaire($_POST['salaire']);





$saveIsOk = $manager->save($employe);

if ($saveIsOk) {
	
	header("location:readAll_employe.php");
}else{

	$message = '<q>Echec de mise à jour !</q>';
}

 ?>

 <!DOCTYPE html>
<html lang='en'>
<head>
	<meta charset="utf_8">
	<title>Mise à jour d'un employe</title>
</head>
<body>
	<center><?php require_once 'menu.php'; ?></center>
	<center>
   <H1 style="margin-top:75px;">Resultat de la mise à jour de l'employe</H1>
   
     <h4><?= $message ?></h4>
</center>
</body>
</html>
