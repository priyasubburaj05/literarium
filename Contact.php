<html>
<head>
<title>Contact Us</title>
<style>
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}
.header {
  padding: 60px;
  text-align: center;
  background:-webkit-linear-gradient(#b22222, #ffff00);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  font-size: 30px;
}


input[type=text], select, textarea {
  width: 100%; /* Full width */
  padding: 12px; /* Some padding */ 
  border: 1px solid #ccc; /* Gray border */
  border-radius: 4px; /* Rounded borders */
  box-sizing: border-box; /* Make sure that padding and width stays in place */
  margin-top: 6px; /* Add a top margin */
  margin-bottom: 16px; /* Bottom margin */
  resize: vertical /* Allow the user to vertically resize the textarea (not horizontally) */
}

/* Style the submit button with a specific background color etc */
input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

/* When moving the mouse over the submit button, add a darker green color */
input[type=submit]:hover {
  background-color: #45a049;
}

/* Add a background color and some padding around the form */
.container {
  border-radius: 10px;
  background-color: #f2f2f2;
  padding: 40px;
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
hr{
        height: 5px;
        background-color: orange;
        border: none;
        box-shadow: 0 10px 10px -10px #8c8c8c inset;
    }
@import url('//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css');

a, a:hover {
	color: #000;
	text-decoration: none;
	padding: 40px;
}

.socialbtnsbtnsbtns, .socialbtnsbtnsbtns ul, .socialbtnsbtnsbtns li {
	margin: 0;
	padding: 50px;
}

.socialbtnsbtnsbtns li {
    list-style: none outside none;
    display: inline-block;
}

.socialbtns li {
    list-style: none outside none;
    display: inline-block;
}

.socialbtns .fa {
	color: #FFF;
	text-shadow: 1px 1px 0px #000,
			1px -1px 0px #000,
			-1px 1px 0px #000,
			-1px -1px 0px #000;
	-webkit-text-shadow: 1px 1px 0px #000,
			1px -1px 0px #000,
			-1px 1px 0px #000,
			-1px -1px 0px #000;
	-moz-text-shadow: 1px 1px 0px #000,
			1px -1px 0px #000,
			-1px 1px 0px #000,
			-1px -1px 0px #000;
	-o-text-shadow: 1px 1px 0px #000,
			1px -1px 0px #000,
			-1px 1px 0px #000,
			-1px -1px 0px #000;
	transition: all ease-out 0.5s;
	-moz-transition: all ease-out 0.5s;
	-webkit-transition: all ease-out 0.5s;
	-o-transition: all ease-out 0.5s;
}

.socialbtns .fa:hover {
	color: #000;
	text-shadow: 1px 1px 0px #fff,
			1px -1px 0px #fff,
			-1px 1px 0px #fff,
			-1px -1px 0px #fff;
	-webkit-text-shadow: 1px 1px 0px #fff,
			1px -1px 0px #fff,
			-1px 1px 0px #fff,
			-1px -1px 0px #fff;
	-moz-text-shadow: 1px 1px 0px #fff,
			1px -1px 0px #fff,
			-1px 1px 0px #fff,
			-1px -1px 0px #fff;
	-o-text-shadow: 1px 1px 0px #fff,
			1px -1px 0px #fff,
			-1px 1px 0px #fff,
			-1px -1px 0px #fff;
	transition: all ease 0.5s;
	-moz-transition: all ease-in 0.5s;
	-webkit-transition: all ease-in 0.5s;
	-o-transition: all ease-in 0.5s;
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
</div>
<br>
<div class="container">
  <form method="Post" action="contactus.php">

    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

<label for="Country">Country</label>
    <input type="text" id="Country" name="Country" placeholder="Your Current Country location...">  

    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" value="Submit">

  </form>
</div>
<hr align="center" length=30px>
<br>
<div align="center" class="socialbtns">
<ul>
<li><a href="http://www.facebook.com" class="fa fa-lg fa-facebook"></a></li>
<li><a href="http://www.twitter.com" class="fa fa-lg fa-twitter"></a></li>
<li><a href="http://www.google.com" class="fa fa-lg fa-google-plus"></a></li>
<li><a href="http://wwwgithub.com" class="fa fa-lg fa-github"></a></li>
<li><a href="http://www.pinterest.com" class="fa fa-lg fa-pinterest"></a></li>
<li><a href="http://www.linkedin.com" class="fa fa-lg fa-linkedin"></a></li>
<li><a href="http://www.instagram.com" class="fa fa-lg fa-instagram"></a></li>
<li><a href="http://www.youtube.com" class="fa fa-lg fa-youtube"></a></li>
</ul>
</div>

</body>
</html>