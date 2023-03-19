


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Page Title</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  

  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600' rel='stylesheet' type='text/css'>
  <link href="https://netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css" rel="stylesheet">
  <link href="styles1.css" type="text/css" rel="stylesheet"/>
  <link href="bootstrap.min.css" type="text/css" rel="stylesheet"/>
  
</head>
<body>
  
  
  <p style="margin-top:20px;">&nbsp;</p>

  <div class="testbox">
    <h1 style="padding-bottom: 30px; padding-top:15px;">Détails utilisateur</h1>

    <?php
    include('dbconnection.php');
    $vid=$_GET['viewid'];
    $ret=mysqli_query($con,"select * from utilisateur where nom ='$vid'");
    $cnt=1;
    while ($row=mysqli_fetch_array($ret)) {

    ?>
    <!-- <form action="create.php" method="post">  -->

      <div class="container">
        <div class="row">

            <div class="col">
                <label id="icon" for="name"><i class="icon-align-justify "></i></label>
                <input type="text" name="nom" id="nom" value="<?php  echo $row['nom'];?>" readonly/> <br/>

                <label id="icon" for="prenom"><i class="icon-align-justify "></i></label>
                <input type="text" name="prenom" id="prenom" value="<?php  echo $row['prenom'];?>" readonly />

                <label id="icon" for="dateNais"><i class="icon-calendar-empty"></i></label>
                <input type="text" name="datenais" id="datenais"  value="<?php  echo $row['datenais'];?>" readonly />  
                
            </div>

            <div class="col">
                <label id="icon" for="email"><i class="icon-envelope"></i></label>
                <input type="text" name="email" id="email" value="<?php  echo $row['email'];?>" readonly /> <br/>

                <label id="icon" for="telephone"><i class="icon-phone"></i></label>
                  <input type="text" name="telephone" id="telephone" value="<?php  echo $row['telephone'];?>" readonly />

                  <label id="icon" for="pays"><i class="icon-info"></i></label>
                  <input type="text" name="pays" id="pays"  value="<?php  echo $row['pays'];?>" readonly  />
                  
            </div>

        </div>

        <div class="row">

          <div class="col">
              <center>
              <div class="accounttype">
                  Sexe &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <?php  echo $row['sexe'];?>
                </div>
              </center>
          </div>

        </div>

        <div class="row">
          <div class="col">
            <label id="icon" for="login"><i class="icon-user"></i></label>
            <input type="text" name="login" id="login"  value="<?php  echo $row['login'];?>" readonly /> <br />
          </div>

          <div class="col">
            <label id="icon" for="mp"><i class="icon-shield"></i></label>
            <input type="password" name="mp" id="mp"  value="<?php  echo $row['mp'];?>" readonly />
          </div>
        </div>

        <div class="row">
            <div class="col-9">
            </div>
          
            <div class="col-3">
              <br/>  
              <a href="index.php" class="boutton" style="widht:150px;"> Retour </a>
              <br/><br/>
            </div>
        </div>

      </div> 
        
    <!-- </form> -->

    <?php 
    $cnt=$cnt+1;
    }?>

  </div>

</body>
</html>