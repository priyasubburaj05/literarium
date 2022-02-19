<html>
<head>
<title>Testimonial</title>
<style>
.container {
  border: 2px solid #ccc;
  background-color: #eee;
  border-radius: 5px;
  padding: 16px;
  margin: 16px 0;
}

/* Clear floats after containers */
.container::after {
  content: "";
  clear: both;
  display: table;
}

/* Float images inside the container to the left. Add a right margin, and style the image as a circle */
.container img {
  float: left;
  margin-right: 20px;
  border-radius: 50%;
}

/* Increase the font-size of a span element */
.container span {
  font-size: 20px;
  margin-right: 15px;
}

/* Add media queries for responsiveness. This will center both the text and the image inside the container */
@media (max-width: 500px) {
  .container {
    text-align: center;
  }

  .container img {
    margin: auto;
    float: none;
    display: block;
  }
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
hr{
        height: 5px;
        background-color: orange;
        border: none;
        box-shadow: 0 10px 10px -10px #8c8c8c inset;
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
  margin: 0;
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
<br>
<div class="container">
  <img src="Reahan.jpeg" alt="Avatar" style="width:90px">
  <p><span>Raamassya Reahan</span> Financial Advisor, Charted Accountant and Vice manager of the company</p>
  <p>My Team saved us from a web disaster.......</p>
</div>

<div class="container">
  <img src="Prashant.jpg" alt="Avatar" style="width:90px">
  <p><span >Prashant Verma</span> CEO at Company & founder</p>
  <p>No one is better than Our Team.</p>
</div>
<div class="container">
  <img src="Priyadarshini.jpeg" alt="Avatar" style="width:90px">
  <p><span >Priyadarshini S</span> Chief Manager, Founder and Designer of the company</p>
  <p>As a leader, It is important to not just see your own success, But focus on success of others.<br> These guys share the same origin. </p>
</div>
<div class="container">
  <img src="Akshara.jpeg" alt="Avatar" style="width:90px">
  <p><span >Akshara Maghesh</span> CEO at Mighty Schools And Cheif Director of the company & founder</p>
  <p>Alone we can do so little, together we can do so much. Our Team is a proof of that.</p>
</div>
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