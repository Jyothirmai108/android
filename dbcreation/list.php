<!D<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
 "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Chalapathi Educational Institutions </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
.lastrow {
    background-color: #1a1a1a;
    text-align: center;
    color: white;
    color: gray;
}
.dropdown-submenu {
    position: relative;
}

.dropdown-submenu .dropdown-menu {
    top: 0;
    left: 100%;
    margin-top: -1px;
</style>
<script> 
$(document).ready(function(){
  $('.dropdown-submenu a.test').on("click", function(e){
    $(this).next('ul').toggle();
    e.stopPropagation();
    e.preventDefault();
  });
});
</script>
</style>
</head>
<body id="top">
<nav class="navbar navbar-default" style="margin-bottom:2px">
  <div class="container">
    <div class="navbar-header">
   <table>
	<tr>
<td><img src="images/logo.png" style="width:100px;height:100px;float:left;margin-right:30px;margin-top:2px;align:middle;"></td>
<td><h1 style="color:#1abc9c;margin-left:30px;font-size:36px;">CHALAPATHI DEGREE COLLEGE
   </h1>
<h4 style="color:#1abc9c;margin-left:150px;">Chalapathi Nagar, LAM, Guntur- 522034</h4></td>
</tr>
 </table>
</div>
</div>
<div></nav>
<nav class="navbar navbar-inverse navbar-static-top margin-bottom=10px" role="navigation">
           
            <div class="collapse navbar-collapse" id="navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="degree.html">HOME</a></li>
					<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">ADMINISTRATION
  <b class="caret"></b></button>
    <ul class="dropdown-menu">  
      <li class="dropdown-submenu">
	   <a class="test" tabindex="-1" href="#">FEES STRUCTURE<span class="caret"></span></a>
	    <ul class="dropdown-menu">
		<li><a class="test" tabindex="-1" href="#">TUTION FEE<span class="caret"></span></a>
		<ul class="dropdown-menu">
          <li><a tabindex="-1" href="degtuition_fee.html">STUDENT FEE DETAILS</a></li>
          <li><a tabindex="-1" href="degStudentpayment.html">STUDENT PAYMENT</a></li>
		  <li><a tabindex="-1" href="degDue.html">REPORT GENERATION</a></li>
		  </ul>
		  </li>
		  </li>
	      <li class="dropdown-submenu">
        <a class="test" tabindex="-1" href="#">BUS FEE<b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a tabindex="-1" href="degbusfee.html">BUS FEE DETAILS</a></li>
          <li><a tabindex="-1" href="degStudentpayment.html">STUDENT PAYMENT</a></li>
		  <li><a tabindex="-1" href="degDue.html">REPORT GENERATION</a></li>
          
        </ul>
      </li>
    </ul>
	 <a class="test" tabindex="-1" href="#">ADMISSIONS<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">LIST OF STUDENTS</a></li>
                            <li><a href="registration-deg.html">NEW APPLICATION</a></li></ul>
	</ul>
		   <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">LOGIN<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="index.html">PRINCIPAL</a></li>
                            <li><a href="index.html">ACCOUNTANT</a></li>
			    <li><a href="index.html">CO-ORDINATOR</a></li></ul>
			<li><a href="gallery.html">GALLERY</a></li>
		     <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">RESOURSES<b class="caret"></b></a>
                       <ul class="dropdown-menu">
                            <li><a href="nss.html">NSS</a></li>
                            <li><a href="ncc.html">NCC</a></li>
                            <li><a href="women-cell.html">WOMEN EMPOWERMENT CELL</a></li>
                            <li><a href="antir.html">ANTI-RAGGING</a></li>
			    <li><a href="sports.html">SPORTS</a></li>
			</ul>
	
            </div><!-- /.navbar-collapse -->
        </nav>
</div>
<body>

<?php
$localhost = "localhost";
$username = "root";
$password = "";
$db_name = "challapathi";

// Create connection
$conn = new mysqli($localhost, $username, $password, $db_name);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     echo "<table><tr><th>ID</th><th>Name</th></tr>";
     // output data of each row
     while($row = $result->fetch_assoc()) {
         echo "<tr><td>" . $row["id"]. "</td><td>" . $row["firstname"]. " " . $row["lastname"]. "</td></tr>";
     }
     echo "</table>";
} else {
     echo "0 results";
}

$conn->close();
?>  

</body>
</html>