<html>
<head>
<title> Sign Up page</title>
<style>
* {box-sizing: border-box}

/* Full-width input fields */
  input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
  padding: 16px;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
    width: 100%;
  }
}
hr{
        height: 5px;
        background-color: orange;
        border: none;
        box-shadow: 0 10px 10px -10px #8c8c8c inset;
    }

.header {
  padding: 60px;
  text-align: center;
  background:-webkit-linear-gradient(#b22222, #ffff00);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  font-size: 30px;
}


.alert {
  padding: 20px;
  background-color: #228B22;
  color: white;
}

.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

.closebtn:hover {
  color: black;
}


#mySidenav a {
  position: absolute; /* Position them relative to the browser window */
  right: -140px; /* Position them outside of the screen */
  transition: 0.3s; /* Add transition on hover */
  padding: 25px; /* 15px padding */
  width: 180px; /* Set a specific width */
  text-decoration: none; /* Remove underline */
  font-size: 20px; /* Increase font size */
  color: white; /* White text color */
  border-radius: 25px 0 0 5px; /* Rounded corners on the top right and bottom right side */
}

#mySidenav a:hover {
  right: 0; /* On mouse-over, make the elements appear as they should */
}

/* The about link: 20px from the top with a green background */
#Testimonial {
  top: 250px;
  background-color: #B22222;
}

</style>
</head>
<body>
<div class="header">
<img src="Logoimg.png" align="left" height=200px width=200px>
  <h1>Literarium</h1>
<hr align="center" length=30px>
</div>
<div id="mySidenav" class="sidenav">
  <a href="Plogin.php" id="Testimonial"> ....Admin Login</a>
</div>
<br>
<div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  <strong>SUCCESSFUL!</strong> The user has been registered SUCCESSFULLY..................
</div>
<form method="post" action="prof.php"  style="border:1px solid #ccc">
  <div class="container">
    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

<label for="fname"><b>First Name</b></label>
<input type="text" placeholder="Enter First name" name="fname" required>
<label for="lname"><b>Last Name</b></label>
<input type="text" placeholder="Enter Last Name" name="lname" required>
<label for="phNo"><b>Phone Number</b></label>
<input type="Number" placeholder="Enter PhoneNo" name="PhNo" required>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<label for="CaNo"><b>Cabin No.</b></label>
<input type="Number" placeholder="Enter Cabin Number" name="CaNo" required>
<br><br>
    <label for="email"><b>Admin-mail</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <label for="psw-repeat"><b>Confirm Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" required>

    <label>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
    </label>

    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

    <div class="clearfix">
      <button type="button" class="cancelbtn">Cancel</button>
      <button type="submit" class="signupbtn">Sign Up</button>
    </div>
  </div>
</form>
</body>
</html>