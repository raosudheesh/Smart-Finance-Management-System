<?php
session_start();
if(!isset($_SESSION['id'])){
  header("location:index.php");
}
?> 

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
    background: white;
    border-radius: 10px;
}
</style>


<form method="POST">

 
    <div class="center">
    <div class="form-group">
      <label>Customer ID</label>
      <input type="text" name="cid" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Customer ID" required>
      
    </div>
   
 

    <button type="submit" name="del" class="btn btn-primary">Submit</button>
</div>
  </form>


  <?php

 include"config.php";

 if(isset($_POST['del']))
 {
   $cid=$_POST['cid'];
  $str = "delete from cust where cid='$cid'";
  $query=mysqli_query($con,$str);
  $str2 = "delete from loan where cid='$cid'";
  $query=mysqli_query($con,$str2);
  ?>
            <script>alert("Deleted succesfully!")</script>
            <script>location.replace("home.php");</script>
            <?php
        }
      
      ?>