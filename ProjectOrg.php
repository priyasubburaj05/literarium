<html>
<head>
<title>Organising Projects</title>
<style>
/* Style the video: 100% width and height to cover the entire window */
#myVideo {
  position:Fixed;
  right: 0;
  bottom: 0;
  min-width: 100%;
  min-height: 100%;
}

/* Add some content at the bottom of the video/page */
.content {
  position: fixed;
  bottom: 0;
  background: rgba(0, 0, 0, 0.5);
  color: #f1f1f1;
  width: 100%;
  padding: 20px;
}

/* Style the button used to pause/play the video */
#myBtn {
  width: 200px;
  font-size: 18px;
  padding: 10px;
  border: none;
  background: #000;
  color: #fff;
  cursor: pointer;
}

#myBtn:hover {
  background: #ddd;
  color: black;
}







.header {
  padding: 60px;
  text-align: center;
  background:-webkit-linear-gradient(#b22222, #ffff00);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  font-size: 30px;
}
hr{
        height: 5px;
        background-color: orange;
        border: none;
        box-shadow: 0 10px 10px -10px #8c8c8c inset;
    }
.dropbtn {
  background-color: #555;
  color: white;
  padding: 12px;
  font-size: 17px;
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
  padding: 16px 16px;
  text-decoration: none;
  display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #000;}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {display: block;}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {background-color: #000;}


form {
  border: 3px solid #f1f1f1;
}

/* Full-width inputs */
input[type=text], input[type=password] {
  width: 80%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 80%;
}

/* Add a hover effect for buttons */
button:hover {
  opacity: 0.8;
}

/* Extra style for the cancel button (red) */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the avatar image inside this container */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

/* Avatar image */
img.avatar {
  width: 40%;
  border-radius: 50%;
}

/* Add padding to containers */
.container {
  padding: 16px;
}

/* The "Forgot password" text */
span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
    display: block;
    float: none;
  }
  .cancelbtn {
    width: 100%;
  }
}


.column {
  float: left;
  width: 40%;
  padding: 60px;
}

/* Clear floats after image containers */
.row::after {
  content: "";
  clear: both;
  display: table;
}
</style>
<head>
<body>
<!-- The video -->
<video autoplay muted loop id="myVideo">
  <source src="tower.mp4" type="video/mp4">
</video>

<!-- Optional: some overlay text to describe the video -->
<div class="content">
  <h1>Add Project</h1>
<form method="post" action="pro.php">
  <div class="container">
  <label for="ProjectName"><b>Project Name</b></label>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" placeholder="Enter the Project name" name="ProjectName" required>
    <br>
    <label for="Des"><b>Description of Project</b></label>
    &nbsp;&nbsp;<input type="text" placeholder="Enter the Project description" name="Des" required>
    <br>
    <label for="Moto"><b>Moto of the Project</b></label>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" placeholder="Enter the Moto of the Project" name="Moto" required>
    <br>
    <label for="member"><b>No. of group Members</b></label>
    <input type="text" placeholder="Enter no. of members the group has" name="member" required>
<br>
    <label for="Leader"><b>Leader Name</b></label>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" placeholder="Enter Leader name" name="Leader" required>
<br>
<label for="category"><b>Category of Project</b></label>
&nbsp;&nbsp;&nbsp;&nbsp;<select name="category" id="category">
<option selected>Select a category</option>
<option value="Arts"><i class="fa fa-fw fas fas fa-palette"></i>Arts</option>
<option Value="Fantasy"><i class="fa fa-fw fas fa-hat-wizard"></i>Fantasy</option>
<option Value="biography"><i class="fa fa-fw fas fa-book-reader"></i>Biography</option>
<option Value="Science"><i class="fa fa-fw fas fa-atom"></i>Science</option>
<option value="Medicine"><i class="fa fa-fw fas fa-book-medical"></i>Medicine</option>
<option Value="Plays"><i class="fa fa-fw fas fa-theater-masks"></i>plays</option>
<option Value="History"><i class="fa fa-fw fas fa-archive"></i>History</option>
<option Value="Law"><i class="fa fa-fw fas fa-marker"></i>Law</option>
<option Value="commerce"><i class="fa fa-fw fas fa-chart-line"></i>commerce</option>
</select>
    <button type="submit">Submit Project Details</button>
    <button type="button" class="cancelbtn">Cancel</button>
</form>
</div>
</body>
</html>