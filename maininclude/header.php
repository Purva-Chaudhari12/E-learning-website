<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <!--Google font-->
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,700;1,700&display=swap" 
              rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">

    <title>student management</title>
    
</head>
<body>
    <!--navigation-->
<nav class="navbar navbar-expand-sm navbar-dark  pl-5 fixed-top">
  <div class="container-fluid">
  <a class="navbar-brand" href="index.php"><span class="special-letter">S</span>park Tuitions</a>

    <span class="navbar-text">Learn and Implement</span>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav custom-nav  ml-auto">
        <li class="nav-item custom-nav-item"><a class="nav-link " href="index.php">Home</a></li>
        <li class="nav-item custom-nav-item"><a class="nav-link " href="courses.php">Courses</a></li>
        <!--<li class="nav-item custom-nav-item"><a class="nav-link " href="#">Payment Status</a></li>-->
        <?php
        session_start();
        if(isset($_SESSION['is_login'])){
          echo'<li class="nav-item custom-nav-item"><a class="nav-link " href="student/profile.php">My Profile</a></li>
          <li class="nav-item custom-nav-item"><a href="logout.php" class="nav-link ">Logout</a></li>';
        }else{
          echo'<li class="nav-item custom-nav-item"><a class="nav-link " href="#" data-bs-toggle="modal" data-bs-target="#LoginModal">Login</a></li>
          <li class="nav-item custom-nav-item"><a class="nav-link" href="#"  data-bs-toggle="modal" data-bs-target="#stuRegisModal">Signup</a></li>';
        }
        ?>
        
        
        <li class="nav-item custom-nav-item"><a class="nav-link " href="feedback.php">Feedback</a></li>
        <li class="nav-item custom-nav-item"><a class="nav-link " href="#">Contact</a></li>
      </ul>
    </div>
  </div>
</nav>
