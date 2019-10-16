<?php 

include_once 'manager.php';
include_once 'employe.php';


$employe = new Employe();

  $employe->setNom($_POST["nom"]);
  $employe->setPrenom($_POST["prenom"]);

  $employe->setEmail($_POST["email"]);
 $employe->setPays($_POST["pays"]);
  $employe->setTel($_POST["tel"]);
  $employe->setSalaire($_POST["salaire"]);
  
 
   

     $mananger = new Manager();

    $saveIsOk =  $mananger->save($employe);

   if ($saveIsOk) {
   	
   	 header("location:readAll_employe.php");
   }else{

   	     $message = "Echec de l'insertion";
   }

 ?>

 <!DOCTYPE html>
<html lang='en'>
<head>
	<meta charset="utf-8">
	<title>ajouter un User</title>
</head>
<body>
   <H1>Ajout d'un user</H1>
   <?= $message; ?>
</body>
</html>