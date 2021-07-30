<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/homestyle.css" class="rel">
    <link rel="stylesheet" href="../css/task_panel.css" class="rel">
    
  </head>
  <body>
    
  <!-- Navbar -->
  <nav class="navbar navbar-toggleable-md navbar-light bg-faded">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar-Logo -->
  <img class="logo" src="../images/prodapt_logo.png">

  <!-- Navbar-Title -->
  <a class="navbar-brand" href="#">Navbar</a>

  <!-- User Logo -->
  <img src="../images/img_avatar.png" alt="Avatar" class="avatar">
    </div>
  <!-- Navigation Links -->
    <div class="btn-group">
    <button type="button" class="btn btn-secondary username">Username</button>
    <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <span class="sr-only">Toggle Dropdown</span>
    </button>
    <div class="dropdown-menu">
    <a class="dropdown-item" href="#">Settings</a>
    <a class="dropdown-item" href="#">Logout</a>
    </div>
    </div>    
   
   </nav>

   <!-- Shift Start and End Buttons -->
   <div class="card bg-dark">
  <div class="card-block">
    <button type="button" class="btn btn-dark" id="start-shift">Start Shift</button>
    <button type="button" class="btn btn-dark" id="end-shift">End Shift</button>    
  </div>
    </div>

    <!-- Tasks Panel -->
   <?php
   $link='task_panel.php';
    include $link;
     ?>


    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="../js/jquery-3.1.1.min.js" ></script>
    <script src="../js/tether.min.js" ></script>
    <script src="../js/bootstrap.min.js"></script>

    <!-- Adding JS files -->
    <script src="../js/popup.js"></script>

  </body>
</html>