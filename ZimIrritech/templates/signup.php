<?php
session_start();
require '../dbh/dbh.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>CMS Sign Up</title>
    <!-- Bootstrap core CSS -->
    <link href="../static/css/bootstrap.min.css" rel="stylesheet">
    <link href="../static/css/csstyle.css" rel="stylesheet">
    <!-- CDN for the fabulous CK editor -->
    <script src="https://cdn.ckeditor.com/4.10.1/standard/ckeditor.js"></script>
  </head>

  <body>

    <nav class="navbar navbar-inverse">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="index.php">Zim Irritech</a>
        </div>
      
        <div class="navbar-header">
          <a class="navbar-brand" href="login.php" onclick="<?php session_destroy(); ?>">Logout</a>
        </div>
        <div class="navbar-header">
          <a class="navbar-brand" href="login.php">Login</a>
        </div>
        <div class="navbar-header">
          <a class="navbar-brand" href="#">Sign Up</a>
        </div>
        
        </div>
    </nav>

    <header id="header">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
<h1 class="text-center">Content Management Site <small>Create Account</small></h1>
          </div>
          
        </div>
      </div>
    </header>

    
<section id="main">
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-md-offset-4">
        <form id="login" action="../php/signup.php" method="post" class="well">
        <div class="form-group">
        <label>Email</label>
        <input type="text" class="form-control" email="email" name="email" placeholder="Valid Email Address" required>
        </div>
        <div class="form-group">
        <label>Password</label>
        <input type="text" class="form-control" name="p1" placeholder="password" required>
        </div>
        <div class="form-group">
        <label>Password</label>
        <input type="password" class="form-control" password="p1" placeholder="re-enter Password" required>
        </div>
        <button type="submit" class="btn btn-green btn-block">Sign Up</button> 
        </form>
      </div>
    </div>
  </div>
</section>

<!-- The foooter -->
<footer>
  <p class="f-left">&copy; 2019 Zim Irritech | All rights reserved</p>
  <p class="f-right">Website by My Club Zw</p>
  </footer>



<!-- CK editor script source -->
<script>
  CKEDITOR.replace('editor1')
</script>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    
    <script src="../static/js/bootstrap.min.js"></script>
    
  </body>
</html>
