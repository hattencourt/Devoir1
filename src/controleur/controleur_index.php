<?php

function actionAccueil($twig){
    echo $twig->render('index.html.twig', array());
}

function actionConnexion($twig){
    echo $twig->render('connexion.html.twig', array()); 
}



function actionAdd($twig,$db){
    $form = array(); 
    if (isset($_POST['btInscrire'])){
      $id = $_POST['id'];
      $nom = $_POST['nom']; 
      $prenom =$_POST['prenom']; 
      $adresse =$_POST['adresse']; 
      $cp =$_POST['cp']; 
      $ville =$_POST['ville']; 
      
if ($nom == null) {
    
}
else {
    $utilisateur = new Utilisateur($db);
 $exec = $utilisateur->insert($id, $nom, $prenom, $adresse, $cp, $ville);
 
 if (!$exec){
 $form['valide'] = false;
 $form['message'] = 'Problème d\'insertion dans la table utilisateur '; 
}
}
    }
    echo $twig->render('adduser.html.twig', array('form'=>$form));
}

function actionMentions($twig){
    echo $twig->render('mentions.html.twig', array());
}

function actionApropos($twig){
    echo $twig->render('apropos.html.twig', array());
}

function actionMaintenance($twig){
    echo $twig->render('maintenance.html.twig', array());
}
?>
