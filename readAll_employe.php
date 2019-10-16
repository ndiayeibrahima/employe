<?php 
include_once 'manager.php';
include_once 'employe.php';


$mananger = new Manager();

$employes = $mananger->readAll();




 ?>

 <!DOCTYPE html>
<html lang='en'>
<head>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <meta charset="UTF_8">
  <title>liste employes</title>
</head>
<body>
 <center><?php require_once 'menu.php'; ?></center> 
  <div class="container" style="margin-top:70px;">
    <div class="panel-primary">
      <div class="panel-heading">Liste des Employes</div>
      <div class="panel-body">
        
        <form method="POST" action="rechercheEmp.php" class="form-inline">
          <div class="form-group">
            <input type="text" name="nom" placeholder="Taper Nom ou Prenom">
            <input type="submit" name="submit" value="Rechercher" class="btn btn-success">
            <a href="form_create_employe.php">Nouvel employe <img src="plus.png" style="width:3%"></a>
          </div>
        </form>
      </div>
    </div>

    <div class="panel-primary">
      
      <div class="panel-body">
         
      
<table class="table table-striped table-bordered">

          <thead>
            <tr>
            <th>Nom</th><th>Prenom</th><th>Email</th><th>Pays</th><th>Telephone</th><th>Salaire</th>
            <th>Modifier</th><th>Supprimer</th>
            </tr>
          </thead>
          <tbody>
           
    <?php foreach($employes as $employe):?>
    
           
            <tr>
             
               <td><?= $employe->getNom() ?> </td>
                <td><?= $employe->getPrenom() ?> </td>
                <td><?= $employe->getEmail() ?> </td>
                 <td><?= $employe->getPays() ?> </td>
                  <td><?= $employe->getTel() ?> </td>
               <td><?=$employe->getSalaire() ?></td>
               
       <td><a  href="form_mod_employe.php?id=<?= $employe->getId()  ?>"><img src="mod.png" style="width:10%; text-align: center;"></a></td>
    <td><a  onclick="return confirm('Voulez vous vraiement supprimer cette ligne')" href="deleteEmp.php?id=<?= $employe->getId() ?>"><img src="sup.png" style="width:10%; text-align: center;"></a></td>
      
            </tr>
        <?php endforeach; ?>
           
          </tbody>
</table>
      
    </div>
  </div> 

</body>
</html>





