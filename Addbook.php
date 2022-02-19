<html>
<head>
<title>Update Catalogue</title>
<style>
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
  margin-top: 12px;
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
  width: 100%;
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
  width: 100%;
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
</head>
<body>
<div class="header">
<img src="Logoimg.png" align="left" height=200px width=200px>
  <h1>Literarium</h1>
<hr align="center" length=30px>
</div>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<br>
<div class="row">
  <div class="column">
    <img src="img4.jpg" style="width:50%">
  </div>
  <div class="column">
    <img src="img5.jpg" style="width:50%">
  </div>
  <div class="column">
    <img src="img6.jpg"  style="width:50%">
  </div>
<div class="column">
    <img src="img7.jpg"  style="width:50%">
  </div>
</div>
<br>
<form method="post" action="book1.php">
  <div class="container">
    <label for="bookname"><b>Book Name</b></label>
    <input type="text" placeholder="Enter the book name" name="bookname" required>

    <label for="Author"><b>Author Name</b></label>
    <input type="text" placeholder="Enter Author name" name="Author" required>

<label for="booklink"><b>book link</b></label>
    <input type="link" placeholder="Enter Book link" name="booklink" required>
<label for="category"><b>Category of book</b></label>
<select name="category" id="category">
<option selected>Select a category</option>
<option value="Arts"><a href="#"><i class="fa fa-fw fas fas fa-palette"></i>Arts</a></option>
<option Value="Fantasy"><a href="#"><i class="fa fa-fw fas fa-hat-wizard"></i>Fantasy</a></option>
<option Value="biography"><a href="#"><i class="fa fa-fw fas fa-book-reader"></i>Biography</a></option>
<option Value="Science"><a href="#"><i class="fa fa-fw fas fa-atom"></i>Science</a></option>
<option value="Medicine"><a href="#"><i class="fa fa-fw fas fa-book-medical"></i>Medicine</a></option>
<option Value="Plays"><a href="#"><i class="fa fa-fw fas fa-theater-masks"></i>plays</a></option>
<option Value="History"><a href="#"><i class="fa fa-fw fas fa-archive"></i>History</a></option>
<option Value="Law"><a href="#"><i class="fa fa-fw fas fa-marker"></i>Law</a></option>
<option Value="commerce"><a href="#"><i class="fa fa-fw fas fa-chart-line"></i>commerce</a></option>
<option Value="textbooks"><a href="#"><i class="fa fa-fw fas fa-book-open"></i></a>textbooks</option>
</select>
    <button type="submit">Add Book</button>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
  </div>
</form>
</body>
</html>
