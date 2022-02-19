<html>
<head>
<title>Facts Zone</title>
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
hr{
        height: 5px;
        background-color: orange;
        border: none;
        box-shadow: 0 10px 10px -10px #8c8c8c inset;
    }


.social{
  margin:10% 30%;
}

svg {
  display:inline-block;
  height:80%; 
  max-height:100%;
  width:auto;
  fill:none;
  stroke:#fff;
  stroke-width:15;
  stroke-miterlimit:5;
}

linearGradient{
  -webkit-transform:rotate(135deg);
  transform:rotate(135deg);
}

.tw{
  stroke-dasharray:4000;
}

.st{
  stroke-dasharray:4000,500,0;
}

.fa{
 stroke-dasharray:3000;
}

.co{
  stroke-dasharray:4000;
}

.px{
  stroke-dasharray:6000;
}

svg:hover .tw{
  -webkit-animation:tw .9s cubic-bezier(0.47, 0, 0.745, 0.715) forwards
 ,gradient1 .8s 5s forwards;
  animation:tw .9s cubic-bezier(0.47, 0, 0.745, 0.715) forwards
 ,gradient1 .8s 1s forwards;
  }


svg:hover .st{
  -webkit-animation:st 1s cubic-bezier(0.47, 0, 0.745, 0.715) forwards
    ,gradient2 .8s 1s forwards;
  animation:st 1s cubic-bezier(0.47, 0, 0.745, 0.715) forwards
    ,gradient2 .8s 1s forwards;
}

svg:hover .fa{
  -webkit-animation:fa .9s cubic-bezier(0.47, 0, 0.745, 0.715) forwards
    ,gradient3 .8s 1s forwards;
  animation:fa .9s cubic-bezier(0.47, 0, 0.745, 0.715) forwards
    ,gradient3 .8s 1s forwards;
}

svg:hover .co{
  -webkit-animation:co .9s cubic-bezier(0.47, 0, 0.745, 0.715) forwards
    ,gradient4 .8s 1s forwards;
  animation:co .9s cubic-bezier(0.47, 0, 0.745, 0.715) forwards
    ,gradient4 .8s 1s forwards;
}

svg:hover .px{
  -webkit-animation:px .9s cubic-bezier(0.47, 0, 0.745, 0.715) forwards
    ,gradient5 .8s 1s forwards;
  animation:px .9s cubic-bezier(0.47, 0, 0.745, 0.715) forwards
    ,gradient5 .8s 1s forwards;
}


.gradient1{
  fill:url(#gradient1);
}

/*------- Stroke animation -------------*/
@keyframes tw { 
  from {
    stroke-dashoffset: 4000;
  } 
  to { 
    stroke-dashoffset: 0;
  }
}

@keyframes st { 
  from {
    stroke-dashoffset: 4000;
  } 
  to { 
    stroke-dashoffset: 0;
  }
}

@keyframes fa { 
  from {
    stroke-dashoffset: 3000;
  } 
  to { 
    stroke-dashoffset: 0;
  }
}

@keyframes co { 
  from {
    stroke-dashoffset: 4000;
  } 
  to { 
    stroke-dashoffset: 0;
  }
}

@keyframes px { 
  from {
    stroke-dashoffset: 6000;
  } 
  to { 
    stroke-dashoffset: 0;
  }
}
/*--------- gradient animation ----*/
@keyframes gradient1 { 
  10% {
    fill:none;
  } 
  100% { 
    fill:url(#gradient1);
    stroke-width:0;
  }
}

@keyframes gradient2 { 
  10% {
    fill:none;
  } 
  100% { 
    fill:url(#gradient2);
     stroke-width:0;
  } 
}

@keyframes gradient3 { 
  10% {fill:none;}    
  100% {
    fill:url(#gradient3);
    stroke-width:0;  
  }
}

@keyframes gradient4 { 
  10% {fill:none;} 
  100% {
    fill:url(#gradient4);
    stroke-width:0;
  }
}

@keyframes gradient5 { 
  10% {fill:none;} 
  100% {
    fill:url(#gradient5);
    stroke-width:0;
  } 
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
<basefont="Bodoni MT" size=3>
<h1 align="center"><font face="Bodoni MT">25 Facts about Libraries</font></h1>
<hr align="center" length=30px>
<center><img src="Factimg.jpg" height=600px width="80%"></center>
<font face="Algerian"><p>
Today, there are roughly 116,867 public and academic libraries dotting the country. To celebrate National Library Week, we've rounded up 25 fascinating facts about these irreplaceable institutions.

<ol type="1">
<li>
One of the oldest public libraries in the country opened in 1790 in Franklin, Massachusetts, where residents circulated books donated by Benjamin Franklin. The Founding Father once started his own lending library in 1731 in Philadelphia called the Library Company, but it required a subscription fee of 40 shillings.
</li>
<li>Philanthropist Andrew Carnegie was a one-man library-funding machine. The wealthy industrialist donated $55 million—or $1.6 billion in today’s dollars—between 1886 and 1919 to open an astonishing 2509 libraries worldwide, including 1679 in the United States.
</li>
<li>Carnegie funded several New York City libraries, and those buildings were often constructed with apartments on the top floor. The idea was that the library’s custodians would have living quarters so that they could keep shoveling coal into furnaces at all hours of the day and night.
</li>
<li>Librarians used to have to adopt a particular style of handwriting known as “librarian hand.” The practice was prevalent in the late 1800s, when library pioneer Melvil Dewey—of the Dewey Decimal System fame—and other curators of early collections believed that legible handwriting was a must for card catalogs. The practice faded as typewriters grew in popularity.
</li>
<li>The world’s biggest library in terms of catalog depth is the Library of Congress (LOC), which has 168 million items. That record is a rebound from a calamity in 1814, when the then-14-year-old collection of 3000 volumes was destroyed after British troops burned the Capitol building.
</li>
<li>The LOC is so devoted to making knowledge available to everyone that it pays to reproduce popular magazines in Braille. In 1985, an irate senator from Ohio named Chalmers Wylie lobbied to get them to stop publishing a Braille version of Playboy. It was reinstated after protests and continues to be published to this day.
</li>
<li>
You don’t necessarily need to head to the Library of Congress to feel overwhelmed by the written word. The McAllen Public Library in McAllen, Texas, is housed in a converted Walmart location and might be the largest single-story library location in the country. The 123,000-square foot space has a computer lab, a cafe, and an 180-seat auditorium.
</li>
<li>The Haskell Free Library and Opera House sits directly on the border between the United States and Canada. You can walk in from Stanstead, Quebec, and walk out into Derby Line, Vermont. You don’t need a passport to cross the (literal) line running through the building, but you do have to return to your country of origin or risk fines.
</li>
<li>
The Joanina Library at the University of Coimbra in Portugal has a number of bats in residency, but no one is calling for an exterminator as the bats prey on insects that could damage book pages. Staff drape tables with coverings overnight and clean up the guano in the morning.
</li>
<li>Among the more popular genres in prison libraries: paranormal romance, young adult titles, and the Left Behind series.
</li>
<li>Not all libraries expect publishers to do the heavy lifting. The Bethlehem Area Public Library in Bethlehem, Pennsylvania, has a publishing arm that released two books in 2018: Home At My Typewriter: Selected Poems by Bob Cohen and A Journey by Matt Wolf. Library staff helped to design and edit the titles.
</li>
<li>If you’re wondering how dirty library books can become after passing through many hands, the answer is: pretty dirty. Everything from traces of cocaine to the herpes virus to bed bugs have been found on sampled pages, but don’t worry: There’s never been a documented case of anyone catching anything from a library book.
</li>
<li>The only danger of a dirty book is to the book itself, as dust can trap moisture that can damage pages. That’s why the Boston Public Library has a machine dubbed the Depulvera that acts like a miniature car wash for books, using a conveyor system to blast dirt from volumes.
</li>
<li>Those late fees for unreturned items can add up. Libraries in larger cities can accrue millions in unpaid penalties. In 2016, the San Jose Public Library reported $6.8 million in delinquent fees, with 39 percent of members owing money. Some places will refer debts to collection agencies if a patron exceeds $10 in charges. Other institutions, like Queens Library in New York, will apply credit to fines if patrons come in for “reading time.” Sitting in the library with a book earns credit toward the amount owed.
</li>
<li>It’s never too late to return a book. In 2015, a former student at Wakefield High School Library in Wakefield, Virginia, named Eleanor Reed sent back a copy of The Underside of the Leaf. It was borrowed in 1981 and accidentally mixed in with the student’s family collection. In 2016, the granddaughter of a man who had taken out The Microscope and Its Revelations from Hereford Cathedral School in the UK returned the title 120 years after it had been “borrowed.”
</li>
<li>Some libraries went to extraordinary lengths to make sure their titles remained on shelves. At Marsh’s Library in Dublin, Ireland, visitors hoping to peruse rare books in the 1800s were locked in cages until they were done reading.
</li>
<li>Not all libraries require silence. The Tikkurila Library in Vantaa, Finland, has a karaoke room with thousands of songs for guests to perform. (Finland is home to a lot of karaoke-loving citizens.) Fortunately, all that warbling doesn’t rise to the level of a disruption: The room is soundproof.
</li>
<li>The New York Public Library offers up more than just books: Members can borrow accessories like neckties and briefcases for people looking to complete an ensemble for a job interview.
</li>
<li>If you’re in the mood to peruse those ties, you’ll pass by Patience and Fortitude, the two lions flanking the main entrance to the New York Public Library. The sculptures went up in 1911 and were originally named Leo Astor and Leo Lenox after the library’s co-founders, John Astor and James Lenox. They were later “anointed” as Lady Astor and Lord Lenox before getting their current names in the 1930s.
</li>
<li>Patrons of the Alaska Resources Library and Information Services in Anchorage can borrow from their collection of taxidermy items, including animals, bones, and furs. Bear and wolf fur are among the more popular requests because they’re often used in Boy Scout promotional ceremonies; Harry Potter fans opt for snowy owl mounts. Borrowers are asked not to remove specimens from their glass containers.
</li>
<li>If you’re in the mood for something a little livelier, the Lillian Goldman Law Library at Yale University allows patrons to check out General Montgomery, a.k.a. Monty, a border terrier mix and certified therapy dog, for 30 minutes of companionship.
</li>
<li>Many libraries offer free music that’s yours to keep. A service called Freegal allows patrons to download songs from a library of over 15 million tracks. Ask your local library if they participate.
</li>
<li>In addition to meeting rooms, book sales, and research assistance, many libraries also offer passport application services that might help you avoid lengthy post office lines.
</li>
<li>The most-borrowed fiction book of 2018 was Little Fires Everywhere by Celeste Ng. For nonfiction, it was Fire and Fury: Inside the Trump White House by Michael Wolff.
</li>
<li>As of 2017, there were 194,000 librarians, 40,000 library technicians, and 96,000 library assistants working in the United States.
</li>
</ol></p></font>
<hr align="center" length=30px>

<div class="social">
  <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1000 1000" width="10" height="10">
    <defs>
      <linearGradient id="gradient1">
        <stop offset="10%" stop-color="#5EFCE8" />
      <stop offset="100%" stop-color="#736EFE" />
      </linearGradient>
    </defs>
    <path stroke="url(#gradient1)" class="tw" d="M112.5,748.5c57.3,5,112.2-2.8,164.8-25.5c25.3-10.9,60.4-32,69.1-41.6c-2-0.2-3.8-0.4-5.5-0.6c-1.6-0.2-3.2-0.5-4.9-0.6 			c-18.1-1.4-35.3-6.1-51.7-13.8c-40-18.9-68-49.1-83.9-90.6c-0.7-1.9-1.2-3.8-2.1-6.3c6.3,0.6,11.9,1.3,17.5,1.7 			c5.9,0.4,11.8,0.8,17.7,0.6c5.7-0.1,11.4-0.8,17-1.6c5.6-0.8,11.2-1.9,17.3-3c-1.5-1.8-3-2-4.4-2.4 			c-49.5-13.3-85.3-43.1-107.2-89.3c-9.4-19.8-14-40.8-14.4-62.7c0-1.7,0.2-3.5,0.3-5.8c6.1,2.8,11.5,5.5,17.1,7.7 c5.7,2.2,11.5,4.2,17.3,5.9c5.7,1.6,11.5,2.9,17.3,3.9c5.9,1,11.9,2.3,18.8,1.7c-2.8-2.9-5.7-4.4-8.1-6.5c-2.7-2.2-5.4-4.4-8-6.7 			c-2.4-2.2-4.8-4.4-7.1-6.8c-2.3-2.3-4.5-4.7-6.7-7.2c-2.3-2.6-4.5-5.3-6.6-8c-2-2.6-3.9-5.2-5.7-7.9c-1.8-2.7-3.6-5.5-5.2-8.3 			c-1.7-3-3.4-6-5-9.1c-1.5-2.9-2.9-5.9-4.2-8.8c-1.3-3-2.5-6-3.6-9.1c-1.2-3.3-2.2-6.6-3.2-9.9c-0.9-3.1-1.7-6.3-2.4-9.5 			c-0.7-3.2-1.4-6.4-1.9-9.6c-0.6-3.4-1-6.9-1.3-10.3c-0.3-3.2-0.4-6.5-0.5-9.8c-0.1-3.3-0.1-6.5,0-9.8c0.1-3.5,0.1-6.9,0.4-10.4 			c0.3-3.3,0.7-6.5,1.2-9.7c0.5-3.2,1.2-6.4,1.9-9.6c0.8-3.4,1.6-6.7,2.5-10.1c0.9-3.1,1.8-6.3,2.9-9.3c1.1-3.1,2.3-6.1,3.5-9.1 			c1.4-3.2,2.8-6.3,4.3-9.4c1.4-2.9,3.1-5.7,4.6-8.5c2.4,0.8,3.4,2.7,4.7,4.3c29.8,35.4,64,65.7,102.9,90.8 			c45.1,29.1,93.8,49.7,146.2,61.5c13.5,3,27.1,5.7,40.9,7.2c10.1,1.1,20.3,2.2,30.4,3.2c2,0.2,4,0.5,6.3-0.3 			c-7.9-39-3.7-76.4,15.1-111.6c15.6-29.2,38.3-51.5,67.7-67c57.9-30.6,137.5-24.2,192.1,32.4c8.8-1.3,17.6-3.6,26.4-6.3 			c8.6-2.6,17.1-5.3,25.5-8.5c8.6-3.3,17-6.9,25.3-10.8c8-3.8,15.8-8.1,23.9-12.2c-1,10.3-13.5,34.3-25.7,49.7 			c-11.6,14.7-25.4,26.9-41,37.5c30.5-3.3,59.5-11.6,87.4-23.6c1.3,1,0.3,1.6,0,2.3c-0.3,0.7-0.9,1.4-1.3,2 			c-13,18.6-27.7,35.8-44.3,51.4c-10.1,9.5-20.8,18.4-32.4,26.8c0,1.4,0,3,0,4.6c0,3.3,0.1,6.5,0.1,9.8 			c0.8,48.8-6.7,96.4-21.3,142.8c-18.6,59.2-47.3,113.2-87.1,161c-60.6,73-136.8,121.8-228.9,145.5c-16.4,4.2-33,7.3-49.7,9.8 			c-30.6,4.6-61.3,5.5-92.2,4.5c-12-0.4-24-1.7-35.9-3.2c-21.5-2.7-42.6-6.9-63.5-12.6c-42.5-11.7-82.5-29.2-120-52.4 			C115,750.4,113.8,749.4,112.5,748.5z"/>
  </svg>
  <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1000 1000" width="10" height="10">
   <defs>
    <linearGradient id="gradient2">
      <stop offset="10%" stop-color="#FEC163"/>
      <stop offset="100%" stop-color="#DE4313"/>
    </linearGradient>
  </defs>
    <g class="st" stroke="url(#gradient2)">
      <path  d="M205.7,588.1c18.6,0,36.4,0,54.5,0c0.2,1.4,0.5,2.5,0.5,3.7c0.1,2.1,0,4.2,0,6.4c0,87.3,0,174.5,0,261.8 c0,2.5,0.1,5,0.1,7.9c1.4,0.2,2.6,0.5,3.8,0.6c1.7,0.1,3.4,0,5.1,0c134.6,0,269.2,0,403.8,0c2.7,0,5.4-0.1,8.5-0.2 			c0.2-1.6,0.3-2.8,0.4-4.1c0.1-1.9,0-3.8,0-5.7c0-87.5,0-174.9,0-262.4c0-2.5,0.1-5,0.2-7c0.5-0.6,0.7-0.8,0.8-0.9 			c0.2-0.1,0.4-0.2,0.6-0.2c16.6-0.1,33.1-0.1,49.7-0.2c0.8,0,1.7,0,2.5,0.2c0.4,0.1,0.7,0.3,1.4,0.6c0.1,0.6,0.4,1.4,0.4,2.2 			c-0.1,109.3-0.1,218.7-0.2,328c0,1.2-0.5,2.5-0.7,3.6c-5.1,0.7-524.1,0.8-530.9,0.1c-0.2-1.1-0.5-2.2-0.6-3.4 			c-0.1-1.7,0-3.4,0-5.1c0-105.7,0-211.5,0-317.2C205.6,594.2,205.7,591.5,205.7,588.1z"/>
      <path  d="M628.1,813.6c-1,0.3-1.6,0.7-2.2,0.7c-105.7,0.1-211.4,0.2-317.1,0.2c-0.6,0-1.2-0.3-2.1-0.6c-0.2-1-0.5-2-0.5-3 			c-0.6-13.2-0.2-60.1,0.5-64.9c1.7-1.3,3.6-0.9,5.5-0.9c13.6-0.1,27.2-0.1,40.8-0.1c88.9,0,177.9-0.1,266.8-0.1c2.5,0,5.1,0,7.8,0 			c0.4,1.6,0.9,2.8,0.9,4c0.1,20.8,0.1,41.6,0,62.4C628.5,811.9,628.3,812.6,628.1,813.6z"/>
      <path   d="M845.5,425c-22.7,3.9-44.8,7.8-67.2,11.7c-0.6-1.7-1.2-3-1.4-4.4c-5.7-32.8-11.3-65.6-17-98.4c-5.3-30.5-10.7-61-16-91.5 			c-4.5-25.7-8.8-51.4-13.3-77.1c-2.3-13.4-4.7-26.7-7.1-40.1c-0.3-1.6-0.3-3.3-0.5-5.3c7.4-2.4,15-2.9,22.5-4.4 			c7.3-1.4,14.6-2.6,21.9-3.8c7.5-1.3,15-2.6,22.8-3.9c0.6,1.9,1.2,3.4,1.5,5c6.4,36.6,12.7,73.1,19.1,109.7 c5.5,31.8,11,63.5,16.6,95.3c5.9,34.1,11.8,68.1,17.7,102.2C845.3,421.2,845.4,422.7,845.5,425z"/>
      <path   d="M308.9,696.1c2.1-23.1,4-45.4,6.3-67.7c2.5-1.5,4.8-0.7,7.1-0.5c7.8,0.7,15.6,1.4,23.4,2.2c6.8,0.6,13.5,1.3,20.3,2 c5.1,0.5,10.1,1,15.2,1.5c6.6,0.6,13.1,1.1,19.7,1.6c6.8,0.6,13.5,1.3,20.3,2c5.3,0.5,10.6,1.1,15.8,1.5c11.4,1,22.8,1.9,34.2,2.9 c11.4,1,22.8,2.3,34.2,3.3c6.5,0.6,13.1,1.1,19.7,1.7c6.8,0.6,13.5,1.3,20.3,1.9c5.3,0.5,10.5,1.1,15.8,1.6 c6.5,0.6,13.1,1,19.7,1.6c6.8,0.6,13.5,1.3,20.3,2c6.5,0.6,13.1,1.2,19.6,1.8c4.8,0.5,9.7,1,14.2,1.4c0.4,0.4,0.6,0.6,0.7,0.8 			c0.1,0.2,0.2,0.4,0.2,0.6c-1.9,22.2-3.9,44.3-5.9,66.6c-3.1,1-5.8,0.4-8.5,0.1c-7.6-0.7-15.2-1.4-22.8-2.1c-7-0.7-13.9-1.4-20.9-2 			c-5.1-0.5-10.1-1-15.2-1.5c-6.6-0.6-13.1-1-19.7-1.6c-6.8-0.6-13.5-1.3-20.3-2c-5.3-0.5-10.5-1.1-15.8-1.5 			c-11.4-1-22.8-1.9-34.2-2.9c-11.4-1-22.8-2.3-34.2-3.4c-6.5-0.6-13.1-1.1-19.7-1.7c-7-0.6-13.9-1.4-20.9-2 			c-5.1-0.5-10.1-1-15.2-1.5c-6.6-0.6-13.1-1-19.7-1.6c-6.8-0.6-13.5-1.3-20.3-2c-6.3-0.6-12.7-1.2-19-1.8 			C319.1,697.2,314.5,696.7,308.9,696.1z"/>
      <path d="M765.5,440.4c-6.6,5.6-52.7,36.7-57.2,38.6c-60.2-88.2-120.4-176.5-180.8-265c0.8-0.8,1.2-1.6,1.9-2 			c17.7-12.1,35.4-24.2,53.1-36.2c0.3-0.2,0.8-0.3,1.4-0.6c2.2,1,3.1,3.2,4.3,5.1c17.1,25,34.2,50.1,51.3,75.2 c40.8,59.8,81.5,119.6,122.3,179.4C763.1,436.6,764.2,438.4,765.5,440.4z"/>
      <path d="M328.2,550.2c5.9-21.9,11.7-43.1,17.5-64.4c0.2-0.6,0.7-1,1.2-1.9c103.1,27.7,206.3,55.4,309.7,83.2c0,1.2,0.2,2.3,0,3.2 			c-5.4,20.3-10.9,40.5-16.4,60.8c-0.2,0.8-0.6,1.5-0.9,2.1c-0.5,0.2-0.7,0.3-0.9,0.3c-0.2,0-0.4,0.1-0.6,0 			c-101.8-27.4-203.6-54.7-305.4-82.1C331.2,551.2,330.1,550.8,328.2,550.2z"/>
      <path d="M697.7,489.3c-11.6,19.6-23,39-34.4,58.3c-2.9,0-4.6-1.7-6.6-2.9c-45.5-26.8-91-53.6-136.5-80.4 			c-42.9-25.3-85.9-50.7-128.8-76c-1.8-1.1-3.6-2.2-5.7-3.4c0.3-0.9,0.4-1.7,0.8-2.3c10.7-18.3,21.5-36.6,32.3-54.8 			c0.4-0.7,1-1.3,1.5-1.9C425.2,327.8,692.3,485.2,697.7,489.3z"/>
  	  </g>
  </svg>


  <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1000 1000" width="10" height="10">
    <defs>
    <linearGradient id="gradient3">
      <stop offset="10%" stop-color="
#52E5E7"/>
      <stop offset="100%" stop-color="#130CB7"/>
    </linearGradient>
  </defs>
    <path class="fa" stroke="url(#gradient3)" d="M583.5,341.5h143.4L710.2,500H583.5v459.8H393.2V500h-94.9V341.5h94.9v-95.4 	c0-67.7,16-118.9,48-153.7s84.6-52.2,157.9-52.2h126.7v158.5h-79.2c-14.5,0-26.1,1.2-34.9,3.6c-8.7,2.4-15.1,6.8-19,13.1 	s-6.4,12.7-7.5,19.3s-1.7,15.7-1.7,27.6V341.5L583.5,341.5z"/>
  </svg>


  <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1000 1000" width="10" height="10">
    <defs>
    <linearGradient id="gradient4">
      <stop offset="10%" stop-color="
#F6D242"/>
      <stop offset="100%" stop-color="#FF52E5"/>
    </linearGradient>
  </defs>
    <path class="co" stroke="url(#gradient4)" d="M872.9,492.8c0,36.7,0,73.5,0,110.2c0,3.3,0,6.7-0.7,9.9c-1.6,7.7-5.6,14-11.9,18.8c-1.4,1.1-2.8,2-4.3,3 			c-112.1,74.8-224.3,149.5-336.4,224.3c-1.3,0.9-2.6,1.8-3.9,2.5c-10.8,5.8-21.5,5.8-32.2-0.1c-1.5-0.8-3-1.9-4.4-2.8 			C367.4,784,255.7,709.6,144,635.1c-2.1-1.4-4.2-2.8-6.1-4.4c-7.5-6.4-11.4-14.6-11.6-24.5c0-1.2,0-2.3,0-3.5c0-73.7,0-147.3,0-221 			c0-2.9,0-5.9,0.5-8.7c1.7-9.3,6.7-16.4,14.5-21.7c6.8-4.6,13.6-9.1,20.4-13.6c105.7-70.4,211.3-140.9,317-211.3 			c1.5-1,2.9-2,4.4-2.8c11.1-6.2,22.2-6.2,33.2,0.1c1.5,0.9,3,1.9,4.4,2.8c111.5,74.3,223,148.6,334.4,223c2.1,1.4,4.2,2.8,6.2,4.4 c7.1,6.1,11.1,13.9,11.5,23.3c0.1,2.1,0,4.3,0,6.4C872.9,420.1,872.9,456.4,872.9,492.8z M670.5,453.5c1.8-1.1,3.1-1.9,4.4-2.7 			c9.7-6.5,19.4-12.9,29.1-19.4c24.4-16.3,48.7-32.6,73.1-48.9c1.7-1.1,3.7-1.9,4.9-4.1c-81.6-54.4-163.1-108.7-244.5-163 			c-1.3-0.9-2.6-1.7-3.9-2.5c-0.1-0.1-0.4-0.1-0.5-0.1c-0.2,0-0.4,0.1-0.5,0.2c-0.7,4.6-0.8,142.2,0,148.2 			C578.3,391.7,624.2,422.5,670.5,453.5z M466.8,772.5c0.2-2,0.4-3.5,0.4-5c0-46.4,0-92.9,0-139.3c0-1.5-0.2-3-0.4-4.5 			c-46.2-30.9-92.1-61.6-138.3-92.5c-36.5,24.4-72.8,48.7-109.1,73c-0.8,0.5-1.4,1.2-2.5,2.1c82.7,55.1,165,110,247.4,164.9 			C465,771.5,465.6,771.8,466.8,772.5z M782.5,606.2c-1.5-1.1-2.2-1.8-3-2.3c-35.3-23.6-70.7-47.3-106-70.9c-0.9-0.6-2-1-3.2-1.5 			c-46.1,30.8-92,61.6-138.2,92.5c0,48.5,0,96.8,0,145.2c0,0.9,0.2,1.8,0.2,2.7c0.7,0,1.2,0.2,1.4,0.1 			C616.4,716.8,699.1,661.7,782.5,606.2z M466.7,212.5c-2.7,1-4.6,2.6-6.7,3.9c-45.4,30.2-90.8,60.5-136.2,90.8 			c-34.2,22.8-68.5,45.7-102.7,68.5c-1.3,0.9-3,1.5-3.9,3.3c1,0.8,1.8,1.4,2.6,1.9c35.2,23.5,70.3,47.1,105.5,70.6 			c1.1,0.7,2.3,1.2,3.5,1.8c46.2-30.9,92.1-61.6,137.8-92.2c0.6-4.7,1-135.4,0.5-146.1C467.2,214.3,467,213.6,466.7,212.5z M387.1,492.4c1.3,1,2.3,1.8,3.4,2.5c35.3,23.7,70.7,47.3,106,70.9c1.1,0.7,2.3,1.2,3.4,1.8c1.7-1.1,3.2-2,4.6-3 			c21.3-14.2,42.6-28.5,63.9-42.8c13.6-9.1,27.1-18.1,40.7-27.2c1-0.7,2.6-1.1,2.3-3.2c-37.1-24.8-74.3-49.7-111.4-74.5 			c-5.1,2.5-94.2,61.7-111,73.6C388.5,491.1,388,491.6,387.1,492.4z M270,491.9c-26.1-17.4-51.8-34.5-77.5-51.6 			c-0.2-0.2-0.7,0-1.5,0.1c-0.5,1.9-0.3,4.1-0.3,6.1c0,27.2,0,54.4,0,81.6c0,4.7,0,9.3,0,14c0,0.8,0.4,1.7,0.6,2.6 			C197.2,541.8,266.1,495.5,270,491.9z M808.3,440.5c-0.7-0.2-0.9-0.3-1-0.3c-0.5,0.2-1.1,0.4-1.6,0.7 			c-25.2,16.9-50.3,33.7-75.5,50.6c-0.2,0.1-0.3,0.3-0.4,0.4c-0.1,0.2,0,0.4,0,0.9c1,0.8,2.2,1.7,3.5,2.5c5.3,3.6,10.7,7.1,16,10.7 c17.9,12,35.8,24,53.8,35.9c1.5,1,2.9,2.6,5.2,2.4C808.3,509.7,808.3,475.2,808.3,440.5z"/>
  </svg>


  <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1000 1000" width="10" height="10">
   <defs>
    <linearGradient id="gradient5">
      <stop offset="10%" stop-color="
#69FF97"/>
      <stop offset="100%" stop-color="#00E4FF"/>
    </linearGradient>
  </defs>
    <g class="px" stroke="url(#gradient5)">
      <path d="M349.8,124.4c0,77.3,0,154,0,231.6c1.2-1.1,2.1-1.9,3-2.7c33.9-31.4,71.1-57.7,115-72.9c147.7-51.3,308,25.5,360,172.1 c56.4,158.9-40.3,333.2-204.6,368.9c-139.5,30.3-276.7-45.2-326.3-179.6c-0.5-1.3-1-2.6-1.5-4c-1.9-5.2-0.8-9.9,3.4-13.4 			c2.6-2.2,5.5-4.3,8.6-5.4c6.7-2.4,13.6-4.6,20.6-6c9-1.9,13.4,1,16.9,9.7c10.1,25.6,22.9,49.7,40,71.4c1.9,2.3,3.8,4.6,6.5,6.6 			c0-1.4,0-2.7,0-4.1c0.1-50.9-0.1-101.9,0.3-152.8c0.5-69,33.6-118.5,94-149c94.7-47.8,209.8,2.7,239.9,103.7 			c28.4,95.3-33,196.1-131.1,214.8c-28.5,5.4-56.8,4.4-84.7-4.2c-6-1.8-9.2-5.8-9.7-11.6c-1-12.3,2.5-23.5,9.4-33.6 			c3.4-4.9,8.2-6.5,14.2-5c14.3,3.4,28.7,6.3,43.5,5.7c54.2-2.1,101.4-43.7,110-97.3c10.2-63.9-28.4-120.8-91.4-134.7 			C528.5,420,472,451.8,451.3,508.5c-4.6,12.7-7,25.8-7,39.4c0,64.1,0,128.2-0.2,192.3c0,2.9,0.9,4.4,3.3,5.8 			c39.8,22.8,82.6,32.7,128.3,29.4c60.3-4.3,112-28,153.7-72c34.9-36.9,55.3-80.9,60.7-131.4c12.4-115.7-60.6-221.6-173.4-248.4 			c-83.2-19.8-156.9,0.8-219,60.3c-14.5,13.9-28.3,28.6-39.9,45.2c-4.6,6.6-11.1,9.7-19,9.5c-10.2-0.2-20.1-2.1-29-7.5 			c-6.9-4.2-10.5-9.9-10.5-18.5c0.2-107.1,0.1-214.1,0.1-321.2c0-10,5.3-17.2,14.2-19.3c1.7-0.4,3.5-0.5,5.2-0.5 			c139.6,0,279.3,0,418.9,0c7,0,11.2,2.6,13.3,9.3c3.5,11.3,3.5,22.8,0.1,34c-2.2,7.1-6.3,9.5-14.2,9.5c-127.4,0-254.8,0-382.2,0 			C353.3,124.4,351.8,124.4,349.8,124.4z"/>
      <path d="M564.7,932.1c-182.3,0-340.6-125.8-381.4-303.2c-1.9-8.2-3.4-16.6-4.9-24.9c-1.1-6.2,0.7-10.6,6.4-13.6 			c10.6-5.5,22.1-7.1,33.9-5.4c5.8,0.8,8.7,4.9,9.7,10.7c5.1,29.7,13.4,58.4,25.9,85.8c34.4,75.5,89.7,130.9,164.1,167 c52.1,25.3,107.5,35.9,165.3,32.5c86-5.1,159.8-38.3,221.4-98.6c9-8.8,14.6-9.5,24.3-1.4c5.6,4.7,10.8,10.2,15.1,16.1 			c5.5,7.6,4.6,12.8-2,19.3c-58.4,58.3-128.2,94.8-209.3,109.7C610.6,930.3,587.7,932.2,564.7,932.1z"/>
      <path d="M564.7,163.7c89.9,1.1,170.8,28.4,241.9,83.9c7.7,6,14.8,12.7,22.1,19.2c5.9,5.3,7,10.6,2.4,16.9 			c-5.3,7.1-11.2,13.9-17.8,19.9c-6.3,5.7-11.6,5-18.2-0.6c-29.6-25.4-61.2-47.6-97.4-62.8c-49.1-20.8-100.3-29.7-153.6-26.4 			c-35.8,2.2-70.4,10.1-104,22.6c-7.3,2.7-11.8,1.6-16.4-4.6c-5.8-7.9-9.2-17-10.4-26.6c-1-7.6,1.7-11.7,8.7-14.6 			c26.3-11,53.7-17.8,81.8-22C524,165.3,544.3,163.8,564.7,163.7z"/>
      <path d="M585.7,550.4c8.6,8.6,16.5,16.5,24.4,24.4c1.2,1.2,2.3,2.3,3.5,3.5c9.3,9.3,9.5,15.4,0.5,25c-2.8,2.9-6.1,5.6-9.6,7.7 			c-5.9,3.5-10.7,2.5-15.6-2.4c-9.1-9-18.2-18.1-27.2-27.2c-0.9-0.9-1.8-1.7-3.4-3.2c-1.4,1.7-2.5,3.3-3.9,4.8 			c-8.6,8.7-17.3,17.3-25.8,26.1c-4.1,4.1-8.7,5-13.8,2.7c-7.6-3.5-13.4-9.1-17.6-16.2c-2.8-4.6-1.7-9.1,2.5-13.4 			c9.4-9.5,18.9-19,28.4-28.5c0.9-0.9,1.8-1.8,2.7-2.9c-5.3-5.3-10.4-10.5-15.5-15.6c-5.2-5.2-10.3-10.3-15.5-15.4 			c-3.2-3.2-4.1-7-2.1-11c4.1-8.1,10.2-14.4,18.3-18.5c4.7-2.3,8.1-1.5,11.8,2.2c9.3,9.2,18.5,18.4,27.7,27.7c0.9,0.9,1.6,2,3.1,3.9 			c2.6-3,4.6-5.5,6.8-7.8c7.6-7.7,15.3-15.3,22.9-23c4.4-4.4,8.5-5.3,14.1-2.7c7.3,3.5,12.9,9,16.9,16c2.8,5,2,9.1-2.3,13.4 			C606.5,530.1,596.2,540.1,585.7,550.4z"/>
	    </g>
  </svg>
</div>
...
</body>
<html>