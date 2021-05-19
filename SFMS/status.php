<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>SGF</title>

 
  <!-- Bootstrap Scripts -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>



<style>


.center{
    position: absolute;
    top: 50% ;
    left: 50% ;
    transform: translate(-50%,-50%);
    width: 400px;
    background: rgb(180, 168, 168);
    border-radius: 10px;
}

</style>
</head>


<body>
  



<?php
			  
session_start();
include "config.php";



$str="select * from loan where cid="$cid"";
$query=mysqli_query($con,$str);


 
?>

<table class="table center">
    <thead>
      <tr>
        
        <th scope="col">CID</th>
        <th scope="col">CNAME</th>
        <th scope="col">BALANCE</th>
      </tr>
 
      <?php
      while($fet=mysqli_fetch_array($query))
      { 
      
        
        ?> 



    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td><?php  echo $fet[0]; ?></td>
        <td><?php  echo $fet[1]; ?></td>
        <td><?php  echo $fet[2]; }?></td>
      </tr>
      
    </tbody>
  </table>
  
  </body>
  </html>
