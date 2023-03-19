

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



<div class="container">
          
  <p style="margin-top:20px;">&nbsp;</p>
  <div style="width:80%; margin: 0px auto;">

  <div class="row">
    <div class="col-7">
      <h1 style="padding-bottom: 30px; padding-top:15px;">Liste des utilisateurs</h1>
    </div>
    <div class="col-3">
      <br/>
      <a href="create.html" class="boutton"> Créer </a>
      <!-- <button type="submit" class="boutton" name="enregistrer">creer</button> -->
    </div>
    <div class="col-2">
    <br/>
    <a href="../" style="font-size:32px; color:green;"><i class="icon-home"></i></a>
    </div>
  </div>

  <table class="table table-striped"  >
  <thead>
    <tr>
      <th scope="col-1">#</th>
      <th scope="col-4">Nom et prenom</th>
      <th scope="col-1">Sexe</th>
      <th scope="col-2">Login</th>
      <th scope="col-1">Téléphone</th>
      <th scope="col-1" style="text-align:center;">Actions</th>
    </tr>
  </thead>
  <tbody>

  <?php
    include('dbconnection.php');
    $ret=mysqli_query($con,"select * from utilisateur");
    $cnt=1;
    $row=mysqli_num_rows($ret);
    if($row>0){
    while ($row=mysqli_fetch_array($ret)) {
  ?>

    <tr>
      <th scope="row"><?php echo $cnt;?></th>
      <td><?php  echo $row['nom'];?> <?php  echo $row['prenom'];?></td>
      <td><?php  echo $row['sexe']=='Masculin' ? 'M' : 'F'; ?></td>
      <td><?php  echo $row['login'];?></td>
      <td><?php  echo $row['telephone'];?></td>
      <td style="text-align:center;">
        <a href="read.php?viewid=<?php echo htmlentities ($row['nom']);?>" class="view" title="View" ><i class="icon-eye-open"></i></a> &nbsp; &nbsp; 
        <a href="edit.php?editid=<?php echo htmlentities ($row['nom']);?>" class="edit" title="Edit" ><i class="icon-edit"></i></a> &nbsp; &nbsp;                     
        <a href="delete.php?delid=<?php echo ($row['nom']);?>" style="color:red;" class="delete" title="Delete"  onclick="return confirm('Etes vous certain de vouloir supprimer ?');"><i class="icon-fire"></i></a> 
      </td>
    </tr>
  
    <?php 
      $cnt=$cnt+1;
      } } else {?>

    <?php } ?>

  </tbody>
</table>

</div>

</body>
</html>