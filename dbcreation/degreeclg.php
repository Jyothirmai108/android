<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "chalapathi");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$studentname = mysqli_real_escape_string($link, $_REQUEST['studentname']);
$roll = mysqli_real_escape_string($link, $_REQUEST['roll']);
$aadhar = mysqli_real_escape_string($link, $_REQUEST['aadhar']);
$fathername = mysqli_real_escape_string($link, $_REQUEST['fathername']);
$mobileno = mysqli_real_escape_string($link, $_REQUEST['mobileno']);
$stumobileno = mysqli_real_escape_string($link, $_REQUEST['stumobileno']);
$dob = mysqli_real_escape_string($link, $_REQUEST['dob']);
$gender = mysqli_real_escape_string($link, $_REQUEST['gender']);
$inter = mysqli_real_escape_string($link, $_REQUEST['inter']);
$marks = mysqli_real_escape_string($link, $_REQUEST['marks']);
$doj = mysqli_real_escape_string($link, $_REQUEST['doj']);
$cour = mysqli_real_escape_string($link, $_REQUEST['cour']);
$year = mysqli_real_escape_string($link, $_REQUEST['year']);
$medium = mysqli_real_escape_string($link, $_REQUEST['medium']);
$community = mysqli_real_escape_string($link, $_REQUEST['community']);
$phyhand = mysqli_real_escape_string($link, $_REQUEST['phyhand']);
$sports = mysqli_real_escape_string($link, $_REQUEST['sports']);
$emailid = mysqli_real_escape_string($link, $_REQUEST['emailid']);
$address = mysqli_real_escape_string($link, $_REQUEST['address']);
$pin = mysqli_real_escape_string($link, $_REQUEST['pin']);
$pic = mysqli_real_escape_string($link, $_REQUEST['pic']);
// attempt insert query execution
$sql = "INSERT INTO degreeclg(studentname, roll, aadhar, fathername, mobileno, stumobileno, dob, gender, inter, marks, doj, cour, year, medium, community, phyhand, sports,  emailid, address, pin, pic) VALUES ('$studentname', '$roll', '$aadhar', '$fathername', '$mobileno', '$stumobileno', '$dob', '$gender', '$inter', '$marks', '$doj', '$cour', '$year', '$medium', '$community', '$phyhand', '$sports',  '$emailid', '$address', '$pin', '$pic')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>
