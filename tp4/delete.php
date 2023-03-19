<?php
//database connection  file
include('dbconnection.php');
//Code for deletion
if(isset($_GET['delid']))
{
    $rid=$_GET['delid'];
    $sql=mysqli_query($con,"delete from utilisateur where nom='$rid'");
    //echo "<script>alert('Utilisateur supprime');</script>"; 
    echo "<script>window.location.href = 'index.php'</script>";     
} 
?>