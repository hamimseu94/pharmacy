<?php 
$title ="My Account";
require_once 'Dahsboar_header.php';
require_once 'Login_auth.php';


?>
<div class = "container">
<div class="container-fluid">
        <div class = "row">
            <div class = "col-6 m-auto"> 
            <div class="card text-white mb-3">
  <div class="card-header bg-primary">Change Passward</div>
  <div class="card-body">
  <form action="change_passward.php" method="POST">
  
  <div class="mb-3">
    <label class="form-label">Password</label>
    <input type="password" class="form-control"  placeholder="type your old passward" name= "old_passward">
  </div>
  <div class="mb-3">
    <label class="form-label">New Password</label>
    <input type="password" class="form-control"  placeholder="Type Your New Passward" name= "new_passward">
  </div>
  <div class="mb-3">
    <label class="form-label">Confirm Password</label>
    <input type="password" class="form-control"  placeholder="Type Your Confirm Passward" name= "confirm_passward">
  </div>
  
  <button type="submit" class="btn btn-success">Change</button>
</form>
  </div>
           
            </div>
        </div>
    </div>
</div>

<?php 
               require_once 'Dahsboar_footer.php';
               ?>