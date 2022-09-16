<?php 
$title ="Add Service";
require_once 'Dahsboar_header.php';
require_once 'Login_auth.php';
require_once 'db.php';
?>
<div class = "container">
<div class = "container-fluid">
<div class = "row">
<div class= "col-8 m-auto">
<div class = "card mb-1"> 
<div class = "card-header bg-info">
<h1 class = text-center>Add Service</h1>
</div>
</div>
<div class = "card-body">
<form action="add_services_post.php" method="POST">
  
  <div class="mb-3">
    <label class="form-label">Service Icon</label>
    <input type="text" class="form-control"   name= "services_icon">
  </div>
  <div class="mb-3">
    <label class="form-label">Service Title</label>
    <input type="text" class="form-control"  name= "services_title">
  </div>
  <div class="mb-3">
    <label class="form-label">Service Description</label>
    <textarea name="services_description" class="form-control" rows="4"></textarea>
  </div>
  
  <button type="submit" class="btn btn-success">Add</button>
</form>
    
</div>
</div>
</div>
</div>
</div>









<?php

require_once 'Dahsboar_footer.php';


?>