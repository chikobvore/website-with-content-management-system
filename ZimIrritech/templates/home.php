<?php
require '../dbh/dbh.php';
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Zim Irritech | Home</title>
<link rel="stylesheet" type="text/css"
href="../static/css/bootstrap.css">
<link rel="stylesheet" type="text/css" 
href="../static/fontawesome-free/css/fontawesome-all.min.css">
<link rel="stylesheet" type="text/css" 
href="../static/css/style.css">
<link rel="stylesheet" type="text/css" 
href="../static/css/flexslider.css">
<link rel="stylesheet" type="text/css" 
href="../static/css/lightbox.min.css">
</head>
<style>
.inform{
    background: url('../static/img/image6.jpg') 0px 0px fixed;
    background-size: cover;
    padding-top: 30px;
    padding-bottom: 30px;
    color:#fff;
}


</style>
<body>

<div class="banner">

<!-- Navbar Start -->
<div id="main-menu">
  <div class="logo-area">
    <a href="#"><img src="../static/img/Zim Irritech 150x150px.png" alt=""></a>
  </div>
  <div class="inner-main-menu">
    <ul>
      <li><a href="#">Home</a></li>
      <li><a href="#">About</a></li>
      <li><a href="#">Services</a></li>
      <li><a href="#">Contact</a></li>
      <li><a href="#">Projects</a></li>
      <li><a href="#">Team</a></li>
      <!-- There is disorder within the list of links because of n:th-child property refer to css -->
    </ul>
  </div>
</div>

 <div id="sliders">
<figure>
<img src="../static/img/image0.jpg">
<img src="../static/img/image1.jpeg">
<img src="../static/img/image2.jpg">
<img src="../static/img/image3.jpg">
<img src="../static/img/image4.jpg">
</figure>
</div>

</div>

<div class="container">
<div class="about">
<h1>About Us</h1>
<h3>Who we are</h3>
<div class="row">
<div class="col-md-4 crl1 about_grid">
<i class="fas fa-university"></i>
<h4>Vision</h4>
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
<button type="button" class="more-bttn" data-toggle="modal" data-target="#exampleModal">
  Read More
</button>
</div>
<div class="col-md-4 crl2 about_grid">
<i class="fa fa-tags"></i>
<h4>Motto</h4>
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
<button type="button" class="more-bttn" data-toggle="modal" data-target="#exampleModal">
  Read More
</button>
</div>
<div class="col-md-4 crl3 about_grid">
<i class="fa fa-tags"></i>
<h4>Values</h4>
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
<button type="button" class="more-bttn" data-toggle="modal" data-target="#exampleModal">
  Read More
</button>
</div>
</div>
</div>
</div>

<div class="services">
<div class="container">
<h1>Services</h1>
<h3>What we do</h3>
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
<div class="row">
<div class="col-md-6">
<div class="services_grid">
<div class="row">
<div class="col-sm-12 col-md-2 services_grid1">
<div class="services_grid_left">
<i class="fa fa-flask"></i>
</div>
</div>
<div class="col-sm-12 col-md-4 services_grid1 services_grid_right">
<h5>Lorem Ipsum Dolo.</h5>
</div>
<div class="col-sm-12 col-md-6 services_grid2">
<p><span><i class="fas fa-long-arrow-alt-right"></i></span>
lorem ipsum dolor emit.
</p>
<p><span><i class="fas fa-long-arrow-alt-right"></i></span>
lorem ipsum dolor emit.
</p>
<button type="button" class="more_details" data-toggle="modal" data-target="#exampleModal">More Details</button>
</div>
</div>
</div>
</div>

<div class="col-md-6">
<div class="services_grid">
<div class="row">
<div class="col-sm-12 col-md-2 services_grid1">
<div class="services_grid_left">
<i class="fa fa-flask"></i>
</div>
</div>
<div class="col-sm-12 col-md-4 services_grid1 services_grid_right">
<h5>Lorem Ipsum Dolo.</h5>
</div>
<div class="col-sm-12 col-md-6 services_grid2">
<p><span><i class="fas fa-long-arrow-alt-right"></i></span>
lorem ipsum dolor emit.
</p>
<p><span><i class="fas fa-long-arrow-alt-right"></i></span>
lorem ipsum dolor emit.
</p>
<button type="button" class="more_details" data-toggle="modal" data-target="#exampleModal">More Details</button>
</div>
</div>
</div>
</div>

<div class="col-md-6">
<div class="services_grid">
<div class="row">
<div class="col-sm-12 col-md-2 services_grid1">
<div class="services_grid_left">
<i class="fa fa-flask"></i>
</div>
</div>
<div class="col-sm-12 col-md-4 services_grid1 services_grid_right">
<h5>Lorem Ipsum Dolo.</h5>
</div>
<div class="col-sm-12 col-md-6 services_grid2">
<p><span><i class="fas fa-long-arrow-alt-right"></i></span>
lorem ipsum dolor emit.
</p>
<p><span><i class="fas fa-long-arrow-alt-right"></i></span>
lorem ipsum dolor emit.
</p>
<button type="button" class="more_details" data-toggle="modal" data-target="#exampleModal">More Details</button>
</div>
</div>
</div>
</div>

<div class="col-md-6">
<div class="services_grid">
<div class="row">
<div class="col-sm-12 col-md-2 services_grid1">
<div class="services_grid_left">
<i class="fa fa-flask"></i>
</div>
</div>
<div class="col-sm-12 col-md-4 services_grid1 services_grid_right">
<h5>Lorem Ipsum Dolo.</h5>
</div>
<div class="col-sm-12 col-md-6 services_grid2">
<p><span><i class="fas fa-long-arrow-alt-right"></i></span>
lorem ipsum dolor emit.
</p>
<p><span><i class="fas fa-long-arrow-alt-right"></i></span>
lorem ipsum dolor emit.
</p>
<button type="button" class="more_details" data-toggle="modal" data-target="#exampleModal">More Details</button>
</div>
</div>
</div>
</div>

</div>
</div>
</div>

<div class="gallery">
<div class="container">
<h1>Our Gallery</h1>
<h3>What we have done</h3>
<div class="gallery-grids">
<div class="row">
<div class="col-sm-12 col-md-4  gallery_grid_imgs">
<a class=""  href="../static/img/image8.jpg" data-lightbox="example-set" data-title="SADC">
<img class="img-fluidsh" src="../static/img/image8.jpg">
</a>
</div>
<div class="col-sm-12 col-md-4  gallery_grid_imgs">
<a class=""  href="../static/img/image3.jpg" data-lightbox="example-set" data-title="Beatrice Farm">
<img class="img-fluidsh" src="../static/img/image3.jpg">
</a>
</div>
<div class="col-sm-12 col-md-4 gallery_grid_imgs">
<a class=""  href="../static/img/image4.jpg" data-lightbox="example-set" data-title="Dezembro Biergarten">
<img class="img-fluidsh" src="../static/img/image4.jpg">
</a>
</div>
<div class="col-sm-12 col-md-4 gallery_grid_imgs">
<a class=""  href="../static/img/image5.jpg" data-lightbox="example-set" data-title="Amristar Eye Clinic">
<img class="img-fluidsh" src="../static/img/image5.jpg">
</a>
</div>
<div class="col-sm-12 col-md-4  gallery_grid_imgs">
<a class=""  href="../static/img/image6.jpg" data-lightbox="example-set" data-title="Free Billboard">
<img class="img-fluidsh" src="../static/img/image6.jpg">
</a>
</div>
<div class="col-sm-12 col-md-4  gallery_grid_imgs">
<a class=""  href="../static/img/image7.jpg" data-lightbox="example-set" data-title="Dulux Paints Zim">
<img class="img-fluidsh" src="../static/img/image7.jpg">
</a>
</div>
<div class="col-sm-12 col-md-4  gallery_grid_imgs">
<a class=""  href="../static/img/image9.jpg" data-lightbox="example-set" data-title="OK Zimbabwe">
<img class="img-fluidsh" src="../static/img/image9.jpg">
</a>
</div>
<div class="col-sm-12 col-md-4  gallery_grid_imgs">
<a class=""  href="../static/img/image10.jpg" data-lightbox="example-set" data-title="PowerTel Zimbabwe">
<img class="img-fluidsh" src="../static/img/image10.jpg">
</a>
</div>
<div class="col-sm-12 col-md-4  gallery_grid_imgs">
<a class=""  href="../static/img/image11.jpg" data-lightbox="example-set" data-title="Red Seal">
<img class="img-fluidsh" src="../static/img/image11.jpg">
</a>
</div>
</div>
</div>
</div>
<button type="button" class="more-bttns" data-toggle="modal" data-target="#exampleModal">
  View More
</button>
</div>

<div class="team">
<div class="container">
<h1>Our Team</h1>
<div class="row">

<div class="col-sm-12 col-md-4">
<div class="t-img">
<a href="#"><img src="../static/img/team1.jpg"></a>
<div class="t-caption">
<ul>
<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
<li><a href="#"><i class="fab fa-twitter"></i></a></li>
<li><a href="#"><i class="fab fa-instagram"></i></a></li>
</ul>
</div>
</div>
<div class="t-info">
<h5>Sales Executive</h5>
<p>Mr Robert</p>
</div>
</div>

<div class="col-sm-12 col-md-4">
<div class="t-img">
<a href="#"><img src="../static/img/team3.jpg"></a>
<div class="t-caption">
<ul>
<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
<li><a href="#"><i class="fab fa-twitter"></i></a></li>
<li><a href="#"><i class="fab fa-instagram"></i></a></li>
</ul>
</div>
</div>
<div class="t-info">
<h5>Chief Executive Officer</h5>
<p>Ms Chido</p>
</div>
</div>

<div class="col-sm-12 col-md-4">
<div class="t-img">
<a href="#"><img src="../static/img/team2.jpg"></a>
<div class="t-caption">
<ul>
<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
<li><a href="#"><i class="fab fa-twitter"></i></a></li>
<li><a href="#"><i class="fab fa-instagram"></i></a></li>
</ul>
</div>
</div>
<div class="t-info">
<h5>Managing Director</h5>
<p>Mr Julius</p>
</div>
</div>


</div>
</div>
</div>


<div class="inform">
<div class="container">
<h1> Make an Enquiry</h1>
<p id="01"></p>
<div class="inform_form">
<form action="../php/inquiry.php" method="POST" id="myForm">
<div class="row">
<div class="col-sm-4 col-md-4 form-left">
<input type="text" name="Name" placeholder="Name" required>
</div>
<div class="col-sm-4 col-md-4 form-left">
<input type="email" name="Email" placeholder="Email" Validate required>
</div>
<div class="col-sm-4 col-md-4 form-right form-left">
<input type="phone" name="Phone" placeholder="Phone" required>
</div>
<div class="clearfix"></div>
</div>
<textarea name="Message" placeholder="Message" required></textarea>
<button type="submit" onsubmit="submit()" class="more-bttn">
  Send
</button>
</form>
</div>
</div>
</div>

<div class="map">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3040.4905765030667!2d31.22716971426517!3d-17.889875682730473!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1931bfb1b42db9d1%3A0x55cb94f6542a76ee!2sShumba+Rd%2C+Ruwa!5e1!3m2!1sen!2szw!4v1548347663323" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></div>

<section>
<div class="container">
<div class="row">

<div class="col-md-4 three_clo">
<h5>Subscribe to newsletter</h5>
<p>orem Ipsum is simply dummy text of the printing and typesetting.</p>
<form action="../php/subscribe.php" method="POST">
<input type="email" name="Email" placeholder="Email">
<button type="submit" class="btn1">
<i class="fas fa-envelope-open "></i>
</button>
</form>
</div>

<div class="col-md-4 mid-row">
<h5>Connect On Social Media</h5>
<p>Lorem Ipsum is simply dummy text of the printing and typesetting.</p>
<div class="social-icon">
<a href="#"><i class="fab fa-facebook-f"></i></a>
<a href="#"><i class="fab fa-twitter"></i></a>
<a href="#"><i class="fab fa-instagram"></i></a>
<a href="#"><i class="fab fa-youtube"></i></a>
</div>
</div>

<div class="col-md-4 contact">
<h5>Contact Us</h5>
<p><i class="fas fa-map-marker-alt"></i><span class="number">5 Goodneston Close Malbereign</span></p>
<p><i class="fas fa-phone"></i><span class="number">(0) 242 123 456</span></p>
<p><i class="fas fa-envelope-open"></i><span class="number"><a href="mailto:@exapmle.com" class="info"></a>info@lethem.co.zw</span></p>
<p><i class="fas fa-calendar"></i>Office hrs: <span class="number">Mon - Fri (0800-1600)</p>
</div>

</div>
</div>
</section>
<footer>
<p class="f-left">&copy; 2019 Zim Irritech | All rights reserved</p>
<p class="f-right">Website by My Club Zw</p>
</footer>

<a href="#" id="back-to-top" title="Back-to-top" ><i class="fas fa-angle-up"></i></a>

<script type="text/javascript" src="../static/js/lightbox-plus-jquery.min.js"></script>
<script type="text/javascript" scr="../static/js/bootstrap.js"></script>
<script type="text/javascript" scr="../static/js/jquery.flexslider.js"></script>
<script type="text/javascript">
	function submit() {
		document.getElementById("myForm").reset();
		document.getElementById('01').textcontent = "Your message have been successful sent"
	}
</script>
</body>
</html>
