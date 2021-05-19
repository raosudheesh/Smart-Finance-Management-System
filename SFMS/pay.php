<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

  <html> 
    <head>
    
    <!-- CSS Stylesheets -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    
    
    
    <!-- Bootstrap Scripts -->
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
        background: grey;
        border-radius: 10px;
    }

    .center1{
    position: absolute;
    top: 20% ;
    left: 50% ;
    transform: translate(-50%,-50%);
    width: 400px;
    background: white;
    border-radius: 10px;
}

.center2{
    position: absolute;
    top: 90% ;
    left: 50% ;
    transform: translate(-50%,-50%);
    width: 100px;
    background: black;
    border-radius: 10px;
}
  
    
    </style>
    </head>
    
    <body>
      
    
    <form method="POST">
    
     
        <div class="center1" >
          
        <div class="form-group">
          <label>Customer ID</label>
          <input type="text" name="cid" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Customer ID" required>
          
        </div>
       
     
    
        <button type="submit" name="sub1" class="btn btn-primary">PAY EMI</button>
    </div>





    <?php

 include"config.php";

 if(isset($_POST['sub1']))
 {
   $cid=$_POST['cid'];

   

  $str2= "select emi from loan where cid='$cid'";
  $emi =mysqli_query($con,$str2);

  $fe=mysqli_fetch_array($emi);
  // $emi1= $fe[0];








  $str ="update loan set bal=bal-'$fe[0]' where cid='$cid'";
  $query=mysqli_query($con,$str);
  $str3 ="select * from loan where cid='$cid'";
  $query=mysqli_query($con,$str3);
  // $res = mysqli_fetch_assoc($query);
  // $emi = $res['emi'];




  

       
      
?> 

<table class="table center ">
    <thead>
      <tr>
      <th scope="col">Sl No</th>
        <th scope="col">LID</th>
        <th scope="col">CID</th>
        <th scope="col">PAMNT</th>
        <th scope="col">DATE</th>
        <th scope="col">DURATION</th>
        <th scope="col">TAMNT</th>
        <th scope="col">BALANCE</th>
        <th scope="col">EMI</th>
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
        <td><?php  echo $fet[2]; ?></td>
        <td><?php  echo $fet[3]; ?></td>
        <td><?php  echo $fet[4]; ?></td>
        <td><?php  echo $fet[5]; ?></td>
        <td><?php  echo $fet[6]; ?></td>
        <td><?php  echo $fet[7]; }?></td>
      </tr>
      
    </tbody>
  </table>
  <?php } ?>

  <a class="btn btn-dark center2" href="home.php">HOME</a>


</body>
</html>