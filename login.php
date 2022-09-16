<?php 
session_start();
require_once 'db.php';
$title ="Login Form";
include_once 'hader.php';
?>


        <meta charset="utf-8" />
        <title>Highdmin - Responsive Bootstrap 4 Admin Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/metismenu.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/style.css" rel="stylesheet" type="text/css" />

        <script src="assets/js/modernizr.min.js"></script>

   
  
    <div class="container">
      <div class="row">
        <div class="col-6 m-auto">
        

        <div class="card   mb-3" >
  <div class="card-header bg-warning"><h1 class="text-center">Login Form</h1></div>

  <div class="card-body">
    <?php if (isset($_SESSION['login_err'])): ?>
  <div  class = "alert alert-danger">

<?=$_SESSION['login_err'] ?>
</div>


<?php endif  ;
unset($_SESSION['login_err']);
?>

  <?php  if (isset($_GET['success_massage'])){ ?>
<div class="alert alert-success alert-dismissible fade show" role="alert">
<?php echo $_GET['success_massage'] ;?> 
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
    <?php }?>


  
  <form action="login_poost.php" method="post">
  
  <div class="form-group">
    <label >Email address</label>
    <input type="text" class="form-control" placeholder="Enter Your email" name="email_address">
    <?php  if (isset($_GET['login_email_err'])){ ?>
<div class="alert alert-danger alert-dismissible fade show" role="alert">
<?php echo $_GET['login_email_err'] ;?> 
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
    <?php }?>

    <?php  if (isset($_GET['login_Invalid_email_err'])){ ?>
<div class="alert alert-danger alert-dismissible fade show" role="alert">
<?php echo $_GET['login_Invalid_email_err'] ;?> 
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
    <?php }?>

  </div>
 
  

  <div class="form-group">


    <label>Password</label>
    <input type="password" class="form-control" placeholder="Password" name="passward">

    <?php
    
    
    if (isset($_GET['pass_err'])){ ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
    <?php echo $_GET['pass_err'] ;?> 
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<?php    }?>

    
    
  </div>

  
  
  
  <button type="submit" class="btn btn-success">Register</button>
</form>

  </div>
</div>

        </div>
      </div>


    </div>
    
    <?php 
    include 'footer.php';
    ?> 