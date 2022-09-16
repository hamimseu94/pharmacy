<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <title><?=$title ?></title>
  </head>


  <body>
  <nav class="navbar navbar-expand-lg navbar-Warning bg-light">
  <a class="navbar-brand" href="index.php">Shahmim Ahmed</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item
      <?php
      if ($_SERVER['PHP_SELF'] =="/Ragister.php") {
        echo "active";
      }

      ?>


      ">
        <a class="nav-link" href="Ragister.php">Registration from <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item

      <?php
      if ($_SERVER['PHP_SELF'] =="/login.php") {
        echo "active";
      }

      ?>

      ">
        <a class="nav-link" href="Login.php">Login Form</a>
      </li>
      <li class="nav-item

      <?php
      if ($_SERVER['PHP_SELF'] =="/user_list.php") {
        echo "active";
      }

      ?>

      ">
        <a class="nav-link" href="user_list.php">User List</a>
      </li>




    </ul>
  </div>
</nav>



</body>
