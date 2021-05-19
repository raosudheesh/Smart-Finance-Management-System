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
      <label>Name</label>
      <input type="text" name="cname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name" required>
      
    </div>
    <div class="form-group">
        <label>Phone no</label>
        <input type="tel"  name="cpno" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Phone no" required>
       
      </div>
      <div class="form-group">
        <label>Email</label>
        <input type="email"  name="cemail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Email" required>
        
      </div>
    <div class="form-group">
      <label>Address</label>
      <input type="text"  name="cadd" class="form-control" id="exampleInputPassword1" placeholder="Enter Address" >
      <small id="emailHelp" class="form-text text-muted">with pincode</small>
    </div>
   
    <button type="submit" name="sub" class="btn btn-primary">Submit</button> 
   
    
            </div>

<!--     
    <input type="submit" name="signup" value="Signup"> -->
            
                
</div>
  </form>


  <?php
    include"config.php";
    if(isset($_POST["sub"]))
    {
        $cname=$_POST["cname"];
        $cemail=$_POST["cemail"];
        $cpno=$_POST["cpno"];
        $cadd=$_POST["cadd"];

        $str="select * from cust where cemail='$cemail'";
        $query=mysqli_query($con,$str);
        $emailcount=mysqli_num_rows($query);
        if($emailcount>0)
        {

            ?>
            <script> alert("Email already exists");</script>
            <?php
  
        }

        else
        {
                $str2="insert into cust (cname,cpno,cemail,cadd) values('$cname','$cpno','$cemail','$cadd')";
                $query=mysqli_query($con,$str2); 
                $str3="select * from cust order by cid desc limit 1";
                $query=mysqli_query($con,$str3); 
                $fa=mysqli_fetch_assoc($query);
                $cid = $fa['cid'];
   
                ?>
                

                <script>alert("Registration succesfull \n \n Customer ID for the new user is  <?php echo $cid ?>");</script>
                
                <script>location.replace("home.php");</script> 
                <?php
        } 
    }
?>
