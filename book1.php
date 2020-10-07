
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
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
body  {
  background-image: url("uu.jpeg");
  background-size:100%;
  background-color: #cccccc;
}
</style>

<title>SAROVAR RESORT</title>
</head>
<body background-color:cyan>

<h1 align="center">SAROVAR RESORT</h1>
<br>
<br>
 <BR>
 <nav class="navbar navbar-expand-lg navbar-light bg-light">
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index1.php">HOME <span class="sr-only">(current)</span></a>
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

<h2 align="center">BOOKING FORM</h2>
<form method="post" action="/bookconfirm.php" onSubmit="return validateForm();">
<div style="width: 400px;">
</div>
<div style="padding-bottom: 18px;font-size : 24px;">Hotel Reservation</div>
<div style="display: flex; padding-bottom: 18px;width : 450px;">
<div style=" margin-left : 0; margin-right : 1%; width : 49%;">First name<span style="color: red;"> *</span><br/>
<input type="text" id="fname" name="fname" style="width: 100%;" class="form-control"/>
</div>
<div style=" margin-left : 1%; margin-right : 0; width : 49%;">Last name<span style="color: red;"> *</span><br/>
<input type="text" id="lname" name="lname" style="width: 100%;" class="form-control"/>
</div>
</div><div style="padding-bottom: 18px;">Phone<span style="color: red;"> *</span><br/>
<input type="text" id="phone" name="phone" style="width : 450px;" class="form-control"/>
</div>
<div style="padding-bottom: 18px;">Email<span style="color: red;"> *</span><br/>
<input type="email" id="email" name="email" style="width : 450px;" class="form-control"/>
</div>
<div style="padding-bottom: 18px;">Arrival date<span style="color: red;"> *</span><br/>
<input type="date" id="adate" name="adate" style="width : 250px;" class="form-control"/>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.4.0/pikaday.min.js" type="text/javascript"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.4.0/css/pikaday.min.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">new Pikaday({ field: document.getElementById('data_6') });</script>
<div style="padding-bottom: 18px;">Departure date<span style="color: red;"> *</span><br/>
<input type="date" id="ddate" name="ddate" style="width : 250px;" class="form-control"/>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.4.0/pikaday.min.js" type="text/javascript"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.4.0/css/pikaday.min.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">new Pikaday({ field: document.getElementById('data_7') });</script>
<div style="padding-bottom: 18px;">Number of adults<span style="color: red;"> *</span><br/>
<input type="number" id="no" name="no" style="width : 250px;" class="form-control"/>
</div>
<div style="padding-bottom: 18px;">Number of children<br/>
<input type="number" id="noc" name="noc" style="width : 250px;" class="form-control"/>
</div>
<div style="padding-bottom: 18px;">Questions / Comments<br/>
<textarea id="comment" false name="comment" style="width : 450px;" rows="6" class="form-control"></textarea>
</div>
<div style="padding-bottom: 18px;"><input name="skip_Submit" value="Submit" type="submit"/></div>
<div>
</div>
</form>

<script type="text/javascript">
function validateForm() {
if (isEmpty(document.getElementById('fname').value.trim())) {
alert('First name is required!');
return false;
}
if (isEmpty(document.getElementById('lname').value.trim())) {
alert('Last name is required!');
return false;
}
if (isEmpty(document.getElementById('phone').value.trim())) {
alert('Phone is required!');
return false;
}
if (isEmpty(document.getElementById('email').value.trim())) {
alert('Email is required!');
return false;
}
if (!validateEmail(document.getElementById('email').value.trim())) {
alert('Email must be a valid email address!');
return false;
}
if (isEmpty(document.getElementById('adate').value.trim())) {
alert('Arrival date is required!');
return false;
}
if (isEmpty(document.getElementById('ddate').value.trim())) {
alert('Departure date is required!');
return false;
}
if (isEmpty(document.getElementById('no').value.trim())) {
alert('Number of adults is required!');
return false;
}
return true;
}
function isEmpty(str) { return (str.length === 0 || !str.trim()); }
function validateEmail(email) {
var re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,15}(?:\.[a-z]{2})?)$/i;
return isEmpty(email) || re.test(email);
}
</script>
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
