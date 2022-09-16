<?php 

$title ="Register Form";
include_once 'hader.php';

?>

<!doctype html>
<html lang="en">

    
<!-- Mirrored from coderthemes.com/highdmin/vertical/page-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Apr 2019 06:52:57 GMT -->
<head>
        <meta charset="utf-8" />
        <title>Highdmin - Responsive Bootstrap 4 Admin Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="Dashboard/assets/images/favicon.ico">

        <!-- App css -->
        <link href="Dashboard/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="Dashboard/assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="Dashboard/assets/css/metismenu.min.css" rel="stylesheet" type="text/css" />
        <link href="Dashboard/assets/css/style.css" rel="stylesheet" type="text/css" />

        <script src="Dashboard/assets/js/modernizr.min.js"></script>

    </head>


    <body class="account-pages">

        <!-- Begin page -->
        <div class="accountbg" style="background: url('Dashboard/assets/images/bg-2.jpg');background-size: cover;background-position: center;"></div>

        <div class="container">
      <div class="row">
        <div class="col-6 m-auto">
        

        <div class="card   mb-3" >
  <div class="card-header bg-info"><h1 >Register Form</h1></div>
  <div class="card-body">

  



  
  
  <form action="registration_post.php" method="post">
  <div class="form-group">
    <label>Full Name</label>
    <input type="text" class="form-control"  placeholder="Enter Your Full Name" name="full_name" value="<?php 
    
    if (isset($_GET['old_ful_name'])){
      echo $_GET['old_ful_name'];
    }
    ?>">
    
 <?php  if (isset($_GET['name_err'])){ ?>
<div class="alert alert-danger alert-dismissible fade show" role="alert">
<?php echo $_GET['name_err'] ;?> 
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
    <?php }?>
  </div>

  <div class="form-group">
    <label >Email address</label>
    <input type="text" class="form-control" placeholder="Enter Your email" name="email_address" value="<?php 
    
    if (isset($_GET['old_pasward'])){
      echo $_GET['old_pasward'];
    }
    ?>">
    <?php  if (isset($_GET['email_err'])){ ?>
<div class="alert alert-danger alert-dismissible fade show" role="alert">
<?php echo $_GET['email_err'] ;?> 
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
    <?php }?>

    <?php  if (isset($_GET['Invalid_email_err'])){ ?>
<div class="alert alert-danger alert-dismissible fade show" role="alert">
<?php echo $_GET['Invalid_email_err'] ;?> 
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
    <?php }?>

  </div>
 
  <div class="form-group">
    <label>Age</label>
    <input type="text" class="form-control" placeholder="Enter your age" name="age" >

    <?php  if (isset($_GET['age_err'])){ ?>
<div class="alert alert-danger alert-dismissible fade show" role="alert">
<?php echo $_GET['age_err'] ;?> 
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
    <?php }?>
    <?php  if (isset($_GET['invalid_age_err'])){ ?>
<div class="alert alert-danger alert-dismissible fade show" role="alert">
<?php echo $_GET['invalid_age_err'] ;?> 
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
    <?php }?>

  </div>

  <div class="form-group">
    <label>Password</label>
    <input type="password" class="form-control" placeholder="Password" name="passward">
  </div>

  <div class="form-group">
    <label>Confirm Password</label>
    <input type="password" class="form-control" placeholder="confirm Password" name="confirm_pasword">
  </div>
  
  
  <button type="submit" class="btn btn-success">Register</button>
</form>

  </div>
</div>

        </div>
      </div>


    </div>



        <!-- jQuery  -->
        <script src="Dashboard/assets/js/jquery.min.js"></script>
        <script src="Dashboard/assets/js/bootstrap.bundle.min.js"></script>
        <script src="Dashboard/assets/js/metisMenu.min.js"></script>
        <script src="Dashboard/ssets/js/waves.js"></script>
        <script src="Dashboard/assets/js/jquery.slimscroll.js"></script>

        <!-- App js -->
        <script src="Dashboard/assets/js/jquery.core.js"></script>
        <script src="Dashboard/assets/js/jquery.app.js"></script>

    </body>

<!-- Mirrored from coderthemes.com/highdmin/vertical/page-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Apr 2019 06:52:57 GMT -->
</html>

  

    
    
    <?php  
   include 'footer.php';  
  ?>