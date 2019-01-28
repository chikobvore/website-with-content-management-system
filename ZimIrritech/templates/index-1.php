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
    <title>CMS Dashboard</title>
    <!-- Bootstrap core CSS -->
    <link href="../static/css/bootstrap.min.css" rel="stylesheet">
    <link href="../static/css/csstyle.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" 
    href="../static/fontawesome-free/css/fontawesome-all.min.css">
    <!-- CDN for the fabulous CK editor -->
    <script src="https://cdn.ckeditor.com/4.10.1/standard/ckeditor.js"></script>
  </head>

  <body>

    <nav class="navbar navbar-inverse">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Let Them Trust</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Dashboard</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            
            <li><a href="#">Welcome, <i><?php echo $_SESSION['Name']." ".$_SESSION['Surname']; ?></i> </a></li>
            
            <li><a onclick="<?php session_destroy(); ?>" href="login.php">Logout</a></li>
            
          
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <header id="header">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
<h1><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Dashboard <small>Manage your website content</small></h1>
        </div>
      </div>
    </header>

    <section id="breadcrumb">
      <div class="container">
        <ol class="breadcrumb">
          <li class="active">Dashboard</li>
        </ol>
      </div>
    </section>

<section id="main">
  <div class="container">
    <div class="row">
      <div class="col-md-2">
        <div class="list-group">
          <a href="#" class="list-group-item active main-kolor">
            <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Dashboard
          </a>
          <a href="emails.php" class="list-group-item">Subscribers </a>
          <a href="messages.php" class="list-group-item">Messages</a>
          <a href="gallery.html" class="list-group-item">Pictures</a>
       </div>
      </div>
      <div class="col-md-10">
          <div class="panel panel-default">
              <div class="panel-heading main-kolor">
                <h3 class="panel-title">Account Overview</h3>
              </div>
              <div class="panel-body">
                <div class="col-md-3">
                  <div class="well dash-box">
                    <h2><span class="glyphicon glyphicon-user" aria-hidden="true"></span></h2>
                    <h4>Account</h4>
                  </div>
                </div>
                <div class="col-md-3">
                    <div class="well dash-box">
                      <h2><span class="glyphicon glyphicon-group-alt" aria-hidden="true"></span></h2>
                      <h4>Add User</h4>
                    </div>
                  </div>
                  <div class="col-md-3">
                      <div class="well dash-box">
                        <h2><span class="glyphicon glyphicon-cog" aria-hidden="true"></span></h2>
                        <h4>Settings</h4>
                      </div>
                    </div>
                    <div class="col-md-3">
                        <div class="well dash-box">
                          <h2><span class="glyphicon glyphicon-stats" aria-hidden="true"></span></h2>
                          <h4>Activity</h4>
                        </div>
                      </div>
              </div>
            </div>
      </div>
    </div>
  </div>
</section>

<!-- The foooter -->
<footer>
<p class="f-left">&copy; 2019 Lethem Trust | All rights reserved</p>
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
