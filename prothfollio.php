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
<h1 class = text-center>Prothfollio</h1>
</div>
</div>
<div class = "card-body">
<form action="add_prothfollio_post.php" method="POST" enctype="multipart/form-data">
  
  <div class="mb-3">
    <label class="form-label">Prothfollio Catagory</label>
    <input type="text" class="form-control"   name= "prothfollio_catagory">
  </div>
  <div class="mb-3">
    <label class="form-label">Prothfollio Title</label>
    <input type="text" class="form-control"  name= "prothfollio_title">
  </div>
  <div class="mb-3">
    <label class="form-label">Prothfollio Photo</label>
    <input type="file" class = "form-control" name="Prothfollio_photo">
  </div>
  
  <button type="submit" class="btn btn-success">Add Prothfollio</button>
</form>
    
</div>
</div>
</div>
</div>
</div>









<?php

require_once 'Dahsboar_footer.php';


?>