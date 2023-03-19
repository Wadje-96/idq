<?php 
error_reporting(E_ALL); 
ini_set("display_errors", 1); 

//Databse Connection file
include('dbconnection.php');
if(isset($_POST['enregistrer']))
  {
  	//recuperation des données 
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $datenais=$_POST['datenais'];
    $email=$_POST['email'];
    $telephone=$_POST['telephone'];
    $pays=$_POST['pays'];
    $sexe=$_POST['sexe'];
    $login=$_POST['login'];
    $mp=$_POST['mp'];
   
  // fabrication de la requette et execution
    $query=mysqli_query($con, "insert into utilisateur (nom, prenom, datenais, email, telephone, pays, sexe, login, mp) value('$nom','$prenom', '$datenais', '$email', '$telephone', '$pays','$sexe', '$login', '$mp')");
    if ($query) {
    echo "<script>alert('Enregistrer avec Succces');</script>";
    echo "<script type='text/javascript'> document.location ='index.php'; </script>";
  }
  else
    {
      echo mysqli_error($con);
      //echo "<script>alert('ERREUR. VEUILLEZ REESAYER');</script>";
    }
}
?>