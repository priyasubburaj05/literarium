<html>
<head>
<title>LogIn to our Bookstore</title>

<style>
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 800px;
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

.navbar {
  width: 100%;
  background-color: #555;
  overflow: auto;
}

/* Navbar links */
.navbar a {
  float: left;
  text-align: center;
  padding: 12px;
  color: white;
  text-decoration: none;
  font-size: 17px;
}

/* Navbar links on mouse-over */
.navbar a:hover{
  background-color: #000;
color: white;
}

/* Current/active navbar link */
.active {
  background-color: #4CAF50;
}

/* Add responsiveness - will automatically display the navbar vertically instead of horizontally on screens less than 500 pixels */
@media screen and (max-width: 500px) {
  .navbar a {
    float: none;
    display: block;
  }
}
.Navbar input[type=text] {
  float: right;
  padding: 6px;
  border: none;
  margin-top: 8px;
  margin-right: 16px;
  font-size: 17px;
}
.header {
  padding: 60px;
  text-align: center;
  background:-webkit-linear-gradient(#b22222, #ffff00);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  font-size: 30px;
}

/*OUR TEAM MEMBERS*/

body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 25%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #474e5d;
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}

hr{
        height: 5px;
        background-color: orange;
        border: none;
        box-shadow: 0 10px 10px -10px #8c8c8c inset;
    }


#mySidenav a {
  position: absolute; /* Position them relative to the browser window */
  left: -125px; /* Position them outside of the screen */
  transition: 0.3s; /* Add transition on hover */
  padding: 25px; /* 15px padding */
  width: 150px; /* Set a specific width */
  text-decoration: none; /* Remove underline */
  font-size: 20px; /* Increase font size */
  color: white; /* White text color */
  border-radius: 0 25px 5px 0; /* Rounded corners on the top right and bottom right side */
}

#mySidenav a:hover {
  left: 0; /* On mouse-over, make the elements appear as they should */
}

/* The about link: 20px from the top with a green background */
#Testimonial {
  top: 400px;
  background-color: #4CAF50;
}

#blog {
  top: 480px;
  background-color: #2196F3; /* Blue */
}

#projects {
  top: 580px;
  background-color: #f44336; /* Red */
}





.dropbtn {
  background-color: #555;
  color: white;
  padding: 12px;
  font-size: 16px;
  border: none;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
  position: absolute;
  display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 140px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #000;}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {display: block;}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {background-color: #000;}




@media (max-width: 600px) {
  ul {
    transform: scale(0.6);
  }
}

@media (min-width: 601px) and (max-width: 700px) {
  ul {
    transform: scale(0.7);
  }
}

@media (min-width: 701px) and (max-width: 800px) {
  ul {
    transform: scale(0.8);
  }
}

ul {
  margin: 40;
  padding: 0;
  list-style: none;
  display: flex;
}

ul li {
  margin: 0 80px;
}

ul li a .fa {
  font-size: 40px;
  color: #555;
  line-height: 80px;
  transition: 0.5s;
}

ul li a {
  position: relative;
  display: block;
  width: 80px;
  height: 80px;
  background: #fff;
  text-align: center;
  transform: perspective(1000px) rotate(-30deg) skew(25deg) translate(0,0);
  transition: 0.5s;
  box-shadow: -20px 20px 10px rgba(0, 0, 0, 0.5);
}

ul li a::before {
  content: "";
  position: absolute;
  top: 10px;
  left: -20px;
  height: 100%;
  width: 20px;
  background: #b2b2b2;
  transition: 0.5s;
  transform: rotate(0deg) skewY(-45deg);
}

ul li a::after {
  content: "";
  position: absolute;
  bottom: -20px;
  left: -10px;
  height: 20px;
  width: 100%;
  background: #e5e5e5;
  transition: 0.5s;
  transform: rotate(0deg) skewX(-45deg);
}

ul li a:hover {
  transform: perspective(1000px) rotate(-30deg) skew(25deg) translate(20px,-20px);
  box-shadow: -50px 50px 50px rgba(0, 0, 0, 0.5);
}

ul li:hover .fa {
  color: #fff;
}

ul li:hover:nth-child(1) a {
  background-color: #3b5999;
}

ul li:hover:nth-child(1) a::before {
  background-color: #2f477a;
}

ul li:hover:nth-child(1) a::after {
  background-color: #4e69a3;
}

ul li:hover:nth-child(2) a {
  background-color: #55acee;
}

ul li:hover:nth-child(2) a::before {
  background-color: #4489be;
}

ul li:hover:nth-child(2) a::after {
  background-color: #66b4ef;
}

ul li:hover:nth-child(3) a {
  background-color: #dd4b39;
}

ul li:hover:nth-child(3) a::before {
  background-color: #b03c2d;
}

ul li:hover:nth-child(3) a::after {
  background-color: #e05d4c;
}

ul li:hover:nth-child(4) a {
  background-color: #0077b5;
}

ul li:hover:nth-child(4) a::before {
  background-color: #005f90;
}

ul li:hover:nth-child(4) a::after {
  background-color: #1984bc;
}

ul li:hover:nth-child(5) a {
  background-color: #e4405f;
}

ul li:hover:nth-child(5) a::before {
  background-color: #b6334c;
}

ul li:hover:nth-child(5) a::after {
  background-color: #e6536f;
}
</style>
</head>
<body>
<div class="header">
<img src="Logoimg.png" align="left" height=200px width=200px>
  <h1>Literarium</h1>
<hr align="center" length=30px>
</div>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="navbar">
  <a class="active" href="Home.php"><i class="fa fa-fw fa-home"></i> Home</a>
  <a href="Fact.php"><i class="fa fa-fw fa-search"></i> Facts</a>
  <a href="Contact.php"><i class="fa fa-fw fa-envelope"></i> Contact</a>
  <a href="star.php"><i class="fa fa-fw fa-envelope"></i> Rate US</a>
<div class="dropdown">
  <button class="dropbtn"><i class="fa fa-fw fa-user-circle"></i>Login</button>
  <div class="dropdown-content">
    <a href="slogin.php"><i class="fa fa-fw fa-user"></i>Student</a>
    <a href="Plogin.php"><i class="fa fa-fw fa-user-circle-o"></i>Admin</a>
  </div>
</div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<div class="dropdown">
  <button class="dropbtn"><i class="fa fa-fw fa-user-plus"></i>Sign Up</button>
  <div class="dropdown-content">
    <a href="SSignUp.php"><i class="fa fa-fw fa-user"></i>Student</a>
    <a href="PSignUp.php"><i class="fa fa-fw fa-user-circle-o"></i>Admin</a>
  </div>
</div>
<input type="text" placeholder="Search..">
</div>
<div id="mySidenav" class="sidenav">
  <a href="Testimonial.php" id="Testimonial">Testimonial</a>
  <a href="Catalogue.php" id="blog">Check Catalogue</a>
  <a href="project.php" id="projects">Projects</a>
</div>
<br>
<div class="slideshow-container">
<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="img1.jpg" style="width:100%">
  <div class="text">The larger the island of Knowledge, The longer the shoreline of wonder.</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="img2.jpg" style="width:100%">
  <div class="text">Knowledge will forever govern ignorance; and a people who mean to be their own governors must arm themselves with the power which knowledge gives.</div>
</div>


<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="img3.jpg" style="width:100%">
  <div class="text">The aim of education is the knowledge. Not of facts, but of values.</div>
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


<div class="about-section">
  <h1>About Us</h1>
  <p>The Literarium Library, foremost among the libraries in India, is one of the four designated libraries entitled to receive under the Delivery of Books and Newspapers (Public Libraries) Act, 1954 a copy of every publication published anywhere in the country. The library is a permanent depository of all reading and printed materials produced in India, or written by any foreigner, wherever published and in whatever language.

The origin of the Literarium Library is traced to the former VIT Library, established in the first half of the 20th century. The VIT Library was established largely at the initiative of Prashant Verma, Priyadarshini, Akshara Magesh and Reahan S, the creators of Literarium. The library will be opened to the public on the 21st november, 2020 on the ground floor in the VIT campus of chennai.

With the intention to provide each and every person each and every peice of knowledge and maintain the acknowledgement that each person receives what eaver knowledge he/she demands and that it should be a library of reference, a working place for students, and a repository of materials for the future historians of India, in which, so far as possible, every work written about India at any time can be seen and read.

All users have the privilege to ask for any book free of cost, received by the Government under the provisions of the Press and Registration of Books Act, 1867. The first step towards the enlargement of the collection of the Literarium Library through exchange of publications with institutions of foreign countries was taken when the library received 2,333 volumes from the Library of Demons.The Literarium Library had a total collection of about 3,50,000 volumes.</p>
</div>

<h2 style="text-align:center">Our Team</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="Prashant.jpg" alt="Prashant" style="width:100%">
      <div class="container">
        <h2>Prashant Verma</h2>
        <p class="title">CEO at Company & founder
	</p>
        <p>I am like the cerulean blue gown of the sea which is covered by pearl white blanket of clouds and the ever pleasing wind that enlightens the soul of person who touches it....</p>
        <p>prashant@example.com</p>
        <p><a href="Contact.php"><button class="button" onclick="Contact.html">Contact</button><a></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="Akshara.jpeg" alt="akshara" style="width:100%">
      <div class="container">
        <h2>Akshara Magesh</h2>
        <p class="title">CEO at Mighty Schools And Cheif Director of the company & founder
	</p>
        <p>To be Yourself in a world that is constantly trying to make you something else, is the greatest accomplishment.</p>
        <p>Akshara@example.com</p>
        <p><a href="Contact.php"><button class="button" onclick="Contact.html">Contact</button><a></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="Priyadarshini.jpeg" alt="Priyadarshini" style="width:100%">
      <div class="container">
        <h2>Priyadarshini S</h2>
        <p class="title">Chief Manager and Designer of the company</p>
        <p>Never doubt that a small group of thoughtful, concerned citizens can change world. Indeed it is the only thing that ever has. </p>
        <p>Priya@example.com</p>
        <p><a href="Contact.php"><button class="button">Contact</button></a></p>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="Reahan.jpeg" alt="Reahan" style="width:100%">
      <div class="container">
        <h2>Raamassya Reahan</h2>
        <p class="title">Financial Advisor, Charted Accountant of the company.
	</p>
        <p>To give yourself the best possible chance of playing to your potential, you must prepare for every eventuality. That means practice.</p>
        <p>Reahan@example.com</p>
        <p><a href="Contact.php"><button class="button" onclick="Contact.html">Contact</button><a></p>
      </div>
    </div>
  </div>
</div>
<br>
<hr align="center" length=30px>
<ul>
  <li><a href="https://www.facebook.com/"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
  <li><a href="https://www.twitter.com/"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
  <li><a href="https://www.googleplus.com/"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
  <li><a href="https://www.linkedin.com/"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
  <li><a href="https://www.instagram.com/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
</ul>
</body>
</html>