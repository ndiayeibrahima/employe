<?php 
class Employe
{
	
	
/**
*  $id  l'identifient du contact il sera generé par le SGBDR 
* on aura pas de setter
*/
private $id;

/**
*  $nom  le nom  du contact 
*/
  private $nom;

 

  /**
*  $tel  le tel  du contact 
*/
  private $prenom;


  /**
*  $mel  le mel  du contact 
*/
  private $email;

  /*
  *@var  le setter du nom 
  */



  /**
*  $mel  le mel  du contact 
*/
  private $pays;

  /*
  *@var  le setter du nom 
  */



  /**
*  $mel  le mel  du contact 
*/
  private $tel;

  /*
  *@var  le setter du nom 
  */


  /**
*  $mel  le mel  du contact 
*/
  private $salaire;

  /*
  *@var  le setter du nom 
  */
  public function setNom($nom)
  {
  	$this->nom = $nom;

  	return $this;
  }

  /*
  *@var le getter de la propriété nom
  */

  public function getnom()
  {
  	return $this->nom;
  }

  public function setPrenom($prenom)
  {
    $this->prenom = $prenom;

    return $this;
  }

  /*
  *@var le getter de la propriété nom
  */

  public function getPrenom()
  {
    return $this->prenom;
  }



 public function setEmail($email)
  {
    $this->email = $email;

    return $this;
  }

  /*
  *@var le getter de la propriété nom
  */

  public function getEmail()
  {
    return $this->email;
  }



public function setPays($pays)
  {
    $this->pays = $pays;

    return $this;
  }

  /*
  *@var le getter de la propriété nom
  */

  public function getPays()
  {
    return $this->pays;
  }



  public function setTel($tel)
  {
  	$this->tel = $tel;

  	return $this;
  }

  /*
  *@var le getter de la propriété prenom
  */

  public function getTel()
  {
  	return $this->tel;
  }
  

  public function setSalaire($salaire)
  {
  	$this->salaire = $salaire;

  	return $this;
  }

  /*
  *@var le getter de la propriété quantite
  */

  public function getSalaire()
  {
  	return $this->salaire;
  }

 



  /*
  *@var le getter de la propriété id
  */

  public function getId()
  {
  	return $this->id;
  }
}

 ?>






















 
