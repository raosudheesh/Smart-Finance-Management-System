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
<style >
    
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
    <div class="form-group">
      <label>Principal Amount</label>
      <input type="text" name="pamnt" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Principal Amount" required>
      
    </div>
    <div class="form-group">
        <label>Duration</label>
        <input type="text" name="durt" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Duration in terms of month" required>
       
      </div>
      <div class="form-group">
        <label>Borrowing Date</label>
        <input type="date" name="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="mm/dd/yyyy" required>
        
      </div>


    
   
 

    <button type="submit" name="sub" class="btn btn-primary">Submit</button>
</div>
  </form>



  <?php

include"config.php";

if(isset($_POST['sub']))
{
  
    $cid = $_POST['cid'];
    $pamnt = $_POST['pamnt'];
    $durt = $_POST['durt'];
    $date = $_POST['date'];
    $tamnt = $pamnt + ($pamnt * $durt * 8 /100);
    $bal=$tamnt;
    $emi=$tamnt/$durt;

    $str= "insert into loan (cid,pamnt,date,durt,tamnt,bal,emi) values('$cid','$pamnt','$date','$durt','$tamnt','$bal','$emi')";
    $query=mysqli_query($con,$str);
    ?>
            <script>alert("Loan has been sanctioned")</script>
            <script>location.replace("home.php");</script>
            <?php
}
?>