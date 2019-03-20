<?php
class Utilisateur{
  private $db;
  private $insert;

  
  public function __construct($db){
        $this->db = $db;
        
$this->insert = $db->prepare("insert into utilisateur(id, nom, prenom, adresse, cp, ville) values
(:id, :nom, :prenom, :adresse, :cp, :ville)"); 
 

 
    }
    public function insert($id,$nom,$prenom,$adresse,$cp,$ville){
        $r = true;
        $this->insert->execute(array(':id'=>$id, ':nom'=>$nom,':prenom'=>$prenom,':adresse'=>$adresse,':cp'=>$cp ,':ville'=>$ville ));
       
        
        return $r;
    }
    
    
}
?>