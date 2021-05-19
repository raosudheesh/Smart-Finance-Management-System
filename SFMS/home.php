 <?php
session_start();
if(!isset($_SESSION['id'])){
  header("location:index.php");
}
?> 

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>SGF</title>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat|Ubuntu" rel="stylesheet">

  <!-- CSS Stylesheets -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="css/styles.css">

  <!-- Font Awesome -->
  <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

  <!-- Bootstrap Scripts -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<body>

 

















  <section class="colored-section" id="title">

    <div class="container-fluid">

      <!-- Nav Bar -->

      <nav class="navbar navbar-expand-lg navbar-dark">

        <a class="navbar-brand" href="">Shri Guru Finance</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">

          <ul class="navbar-nav ml-auto">
            
            <li class="nav-item">
              <a class="nav-link" href="logout.php">Logout</a>
            </li>
            
          </ul>

        </div>
      </nav>



      <!-- Title -->

      <div class="row">

       

      </div>

    </div>

  </section>




  <!-- Pricing -->

 



  <form method="POST">


  <section class="white-section" id="pricing">

    <h2 class="section-heading">Shri Guru Finance Database</h2>
    
    

    <p>Select one from the following</p> 



     <!-- cart -->



<!-- Button trigger modal -->

           
                  <!-- fetch -->

               

<!-- cart -->


    

    <div class="row">
    
    
      <div class="pricing-column col-lg-4 col-md-6">
        <div class="card">
          <div class="card-header">
            <h3>Add new customer</h3>
          </div>
          <div class="card-body">
           
            <p>Clcik below to add new customer</p>
            
           
             <a class="btn btn-dark" href="adduser.php"> NEW</a>
          </div>
        </div>
      </div>

      <div class="pricing-column col-lg-4 col-md-6">
        <div class="card">
          <div class="card-header">
            <h3>Delete customer</h3>
          </div>
          <div class="card-body">
            
            <p>Click below to delete customer</p>



            
            
            <a class="btn btn-dark" href="delcid.php"> DELETE</a>
          </div>
        </div>
      </div>
      

      <div class="pricing-column col-lg-4">
        <div class="card">
          <div class="card-header">
            <h3>Customer Services</h3>
          </div>
          <div class="card-body">
           
            <p>Click here to update customer details</p>
           
            <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#exampleModalCenter">
              UPDATE
            </button>
            
            <!-- Modal -->
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Select one from below</h5>
                    
                  </div>
                  <div class="modal-body">

                 
                  <a class="btn btn-dark" href="alluser.php">All Customer Details</a>
                  <a class="btn btn-dark" href="newloan.php">New Loan</a>
                  <a class="btn btn-dark" href="cid.php">Loan status</a>
                    
                    

          </div>
        </div>
      </div>



    </div>

  </section>
  </form>


  <!-- Footer -->

  <footer class="white-section" id="footer">
    <div class="container-fluid">
    
      <p>© Copyright 2020 SGF</p>
     
    </div>

<!-- map -->

  </footer>


</body>

</html>
