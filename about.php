<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="assets/css/style2.css">
</head>

<style>
fdiv {
display: flex;
justify-content: center;
align-items: center;
height: 250px;
}

body  {   background-image: url('assets/background/back.jpg'); height: 100vh; background-repeat: norepeat; width: 100%; background-size: cover;
}
</style>
<body>
<div id="mySidenav" class="sidenav">
   <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

   <a href="home.php">HOME</a>
  <a href="admin_login.php">ADMIN LOGIN</a>
  <a href="#">ABOUT</a>
  <a href="contact.html">CONTACT</a>
  
</div>


<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>

<div id="head" class="head">
<h1><center>ABOUT</center></h1>
</div>


<p>The aim of electronic voting schemes is to provide a set of protocols that allow voters to cast ballots while a group of authorities collect votes and output the final tally. Problems with voting machines extend from the quality of the locks, to the need for a printed audit trail, to the hacking of the communication links. Although voting makes many people to believe that voting is the perfect application for technology, but in reality applying it is hard. For a voting system to be ideal, four attributes must be satisfied: anonymity, scalability, speed, and accuracy. On-line Voting System is a web based system that facilitates the running of elections and surveys online. This system has been developed to simplify the process of organizing elections and make it convenient for voters to vote remotely from their home computers while taking into consideration security, anonymity and providing auditioning capabilities.</p>			
				
	
<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  
}
</script>
  
</body>
</html>
