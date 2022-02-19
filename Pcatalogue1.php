<html>
<head>
<title>Admin Catalogue</title>
<script>
function myFunction() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>
<style>
#myInput {
  background-image: url('/css/searchicon.png'); /* Add a search icon to input */
  background-position: 10px 12px; /* Position the search icon */
  background-repeat: no-repeat; /* Do not repeat the icon image */
  width: 100%; /* Full-width */
  font-size: 16px; /* Increase font-size */
  padding: 12px 20px 12px 40px; /* Add some padding */
  border: 1px solid #ddd; /* Add a grey border */
  margin-bottom: 12px; /* Add some space below the input */
}

#myTable {
  border-collapse: collapse; /* Collapse borders */
  width: 100%; /* Full-width */
  border: 1px solid #ddd; /* Add a grey border */
  font-size: 18px; /* Increase font-size */
}

#myTable th, #myTable td {
  text-align: left; /* Left-align text */
  padding: 12px; /* Add padding */
}

#myTable tr {
  /* Add a bottom border to all table rows */
  border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
  /* Add a grey background color to the table header and on hover */
  background-color: #f1f1f1;
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




.btn {
  border: 2px solid black;
  background-color: white;
  color: black;
  padding: 14px 28px;
  font-size: 16px;
  cursor: pointer;
}

/* Green */
.success {
  border-color: #4CAF50;
  color: green;
}

.success:hover {
  background-color: #4CAF50;
  color: white;
}

/* Blue */
.info {
  border-color: #2196F3;
  color: dodgerblue
}

.info:hover {
  background: #2196F3;
  color: white;
}

/* Orange */
.warning {
  border-color: #ff9800;
  color: orange;
}

.warning:hover {
  background: #ff9800;
  color: white;
}

/* Red */
.danger {
  border-color: #f44336;
  color: red
}

.danger:hover {
  background: #f44336;
  color: white;
}

/* Purple */
.stor {
  border-color: #800080;
  color: purple
}

.stor:hover {
  background: #800080;
  color: white;
}

/* Gray */
.default {
  border-color: #e7e7e7;
  color: black;
}

.default:hover {
  background: #e7e7e7;
}



.alert {
  padding: 20px;
  background-color: #008080;
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
  transition: 0.7s;
}

.closebtn:hover {
  color: black;
}
</style>
</head>
<body>
<div class="header">
<img src="Logoimg.png" align="left" height=200px width=200px>
  <h1>Literarium</h1>
<hr align="center" length=30px>
</div>
<div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  <strong>Successfull!..</strong> Added the data to table.
</div>
<br>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="navbar">
  <a class="active" href="Home.php"><i class="fa fa-fw fa-home"></i> Home</a>
  <a href="Fact.php"><i class="fa fa-fw fa-search"></i> Facts</a>
  <a href="Contact.php"><i class="fa fa-fw fa-envelope"></i> Contact</a>
<input type="text" placeholder="Search..">
</div>
<br>
<a href="Addbook.php"><button class="btn success">Add Book/Link</button></a>
<a href="calendar.php"><button class="btn info">Calendar</button></a>
<a href="Timeline.php"><button class="btn warning">Timeline</button></a>
<a href="ProjectOrg.php"><button class="btn danger">Organise Projects</button></a>
<a href="application.php"><button class="btn default">Applications</button></a>
<a href="index.php"><button class="btn stor">Book Shop</button></a>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<br><br>


<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names..">

<table id="myTable">
  <tr class="head">
    <th>BookName</th>
    <th>Author</th>
    <th>BookLink</th>
    <th>Category</th>
  </tr>
  <?php
$conn = mysqli_connect("localhost", "root", "", "book_store");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM bookdetails ORDER BY Bookname";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["Bookname"]. "</td><td>" . $row["Author"] . "</td><td>"
.$row["Booklink"]. "</td><td>"
. $row["Category"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
<hr align="center" length=30px>
<ul>
  <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
  <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
  <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
  <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
  <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
</ul>
</body>
</html>