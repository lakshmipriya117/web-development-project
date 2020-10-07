<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>index</title>
	<style>
	body  {
  background-image: url("nn.jpeg");
  background-size:100%;
   background-repeat: no-repeat;
  background-attachment: fixed;
  background-color: #cccccc;
}
</style>
	
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
</style>
  </head>
  <body>
 <h1 style="color:white;">SAROVAR RESORT</H1>
 <BR>
 <BR>
 <nav class="navbar navbar-expand-lg navbar-light bg-light">
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">HOME <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login1.php">LOGIN</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          OVERVIEW
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="img1.html">GALLERY</a>
          <a class="dropdown-item" href="over1.html">WHAT TO KNOW</a>
          <div class="dropdown-divider"></div>
       
        </div>
      </li>
	  <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          MORE
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="sign1.php">SIGN UP</a>
          <a class="dropdown-item" href="book1.php">BOOK NOW</a>
          <div class="dropdown-divider"></div>
       
        </div>
      </li><li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          ABOUT US
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
		<a class="dropdown-item" href="rev.html">REVIEWS AND RATINGS</a>
          <a class="dropdown-item" href="cont.php">CONTACT FORM</a>
          <a class="dropdown-item" href="cont2.html">EMAIL AND PHONE</a>
          <div class="dropdown-divider"></div>
       
        </div>
      </li>
      
      
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="dd.jpeg" style="width:100%">
  <div class="text">Caption Text</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="hh.jpeg" style="width:100%">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="ee.jpeg" style="width:100%">
  <div class="text">Caption Three</div>
</div>

</div>
<br>
<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>

var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
<img src="xx.jpeg" class="rounded float-left" width="25%">

<img src="ww.jpeg" class="rounded float-right" width="25%">
<MARQUEE><p  style="font-size:28px" style="color:white";>Ready To Join.......Book NOW.......</p></MARQUEE><br>
<p align="center" style="font-size:15px">
<b><u>For new Booking....<u></b>
<a href="book1.php">
 CLICK HERE</a>
 </p>
 
    <h3>THE EXACT PLACE TO SPEND QUALITY TIME OF YOUR VACATION..WITH SEA VIEW 
	AND EXCELLENT ACCOMODATION FACILITIES WAIT TO BE MESMORISED</h3>
 <br>
<br> 
<div class="card-group">
  <div class="card">
    <img src="fl.jpeg" class="card-img-top" width="25%">
    <div class="card-body">
      <h5 class="card-title">FLIPKART</h5>
      <p class="card-text">exciting offers never waits</p>
	  <a href="https://www.flipkart.com" class="btn btn-primary">CLICK HERE</a>
     
    </div>
  </div>
  <div class="card">
    <img src="ll.jpeg" class="card-img-top" width="25%">
    <div class="card-body">
      <h5 class="card-title">SAROVAR RESORT</h5>
      <p class="card-text">why waiting....stop waiting and book fast</p>
	 <a href="login1.php" class="card-link">login</a>
    <a href="sign1.php" class="card-link">sign up</a>
     
    </div>
  </div>
  <div class="card">
    <img src="am.jpeg" class="card-img-top" width="25%">
    <div class="card-body">
      <h5 class="card-title">AMAZON</h5>
     <p class="card-text"> SURPRISING DEALS IN THE STORE</p>
    <a href="https://www.amazon.in" class="btn btn-primary">CLICK HERE</a>
    </div>
  </div>
</div>
<br>
<br>
<hr>
<footer>
  <center><p>Posted by: lakshmipriya</p></center>
 <center><p>copyright@2019</p></center>
</footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>