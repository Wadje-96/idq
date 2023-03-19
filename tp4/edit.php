
<?php 
//Database Connection
include('dbconnection.php');
if(isset($_POST['modifier']))
  {
  	//$eid=$_GET['editid'];
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

    //executer la requete de mise à jour
     $query=mysqli_query($con, "update  utilisateur set nom='$nom',prenom='$prenom', datenais='$datenais', email='$email', pays='$pays', sexe='$sexe', login='$login', mp='$mp' where nom='$nom'");
     
    if ($query) {
    echo "<script>alert('Vos donnees ont ete correctement mises à jour !');</script>";
    echo "<script type='text/javascript'> document.location ='index.php'; </script>";
  }
  else
    {
      echo "<script>alert('Quelque chose s'est mal passe. SVP veuillez reessayer.');</script>";
    }
}
?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>IDQ</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  

  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600' rel='stylesheet' type='text/css'>
  <link href="https://netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css" rel="stylesheet">
  <link href="styles1.css" type="text/css" rel="stylesheet"/>
  <link href="bootstrap.min.css" type="text/css" rel="stylesheet"/>
  
</head>
<body>
  
  
  <p style="margin-top:20px;">&nbsp;</p>

  <div class="testbox">
    <h1 style="padding-bottom: 30px; padding-top:15px;">Edition utilisateur</h1>

    <?php
      include('dbconnection.php');
      $eid=$_GET['editid'];
      $ret=mysqli_query($con,"select * from utilisateur where nom ='$eid'");
      $cnt=1;
      while ($row=mysqli_fetch_array($ret)) {

    ?>

    <form action="edit.php" method="post"> 

      <div class="container">
        <div class="row">

            <div class="col">
                <label id="icon" for="name"><i class="icon-align-justify "></i></label>
                <input type="text" name="nom" id="nom" placeholder="Nom" value="<?php  echo $row['nom'];?>" required /> <br/>

                <label id="icon" for="prenom"><i class="icon-align-justify "></i></label>
                <input type="text" name="prenom" id="prenom" placeholder="Prenom" value="<?php  echo $row['prenom'];?>"  />

                <label id="icon" for="dateNais"><i class="icon-calendar-empty"></i></label>
                <input type="text" name="datenais" id="datenais" placeholder="Date de naissance" value="<?php  echo $row['datenais'];?>" />  
                
            </div>

            <div class="col">
                <label id="icon" for="email"><i class="icon-envelope"></i></label>
                <input type="text" name="email" id="email" placeholder="Email" value="<?php  echo $row['email'];?>" /> <br/>

                <label id="icon" for="telephone"><i class="icon-phone"></i></label>
                  <input type="text" name="telephone" id="telephone" placeholder="Telephone" value="<?php  echo $row['telephone'];?>" />

                  <label id="icon" for="pays"><i class="icon-info"></i></label>
                  <input type="text" name="pays" id="pays" placeholder="pays" value="<?php  echo $row['pays'];?>" />

                  
            </div>

        </div>

        <div class="row">

          <div class="col">
              <center>
              <div class="accounttype">
                  Sexe &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <?php  if ($row['sexe']=='Masculin'){?>
                    <input type="radio" value="Masculin" id="radioMas" name="sexe" checked />
                    <label for="radioMas" class="radio" chec>Masculin</label>
                    <input type="radio" value="Feminin" id="radioFem" name="sexe" />
                    <label for="radioFem" class="radio">Feminin</label>
                  <?php  } else { ?>
                    <input type="radio" value="Masculin" id="radioMas" name="sexe"  />
                    <label for="radioMas" class="radio" chec>Masculin</label>
                    <input type="radio" value="Feminin" id="radioFem" name="sexe" checked/>
                    <label for="radioFem" class="radio">Feminin</label>
                  <?php  } ?>
                </div>
              </center>
          </div>

        </div>

        <div class="row">
          <div class="col">
            <label id="icon" for="login"><i class="icon-user"></i></label>
            <input type="text" name="login" id="login" placeholder="login" value="<?php  echo $row['login'];?>" /> <br />
          </div>

          <div class="col">
            <label id="icon" for="mp"><i class="icon-shield"></i></label>
            <input type="password" name="mp" id="mp" placeholder="mot de passe" value="<?php  echo $row['mp'];?>" />
          </div>
        </div>

        <div class="row">
            <div class="col-9">
            </div>
          
            <div class="col-3">
              <br/>  
              <button type="submit" class="boutton" name="modifier">Enregistrer</button>
              <br/><br/>
            </div>
        </div>

      </div> 
        
    </form>

    <?php 
    $cnt=$cnt+1;
    }?>


  </div>

</body>
</html>