<?php

$link = mysqli_connect("localhost","root","","chalapathi");

            // Check connection
if (!$link)
{
            echo "Connection failed: " . mysqli_connect_error();
}
            else
{
                //select table
				echo"connected";
                //mysqli_select_db("chalapathi");
               // echo "Database Found! <br>";
				$feecat = mysqli_real_escape_string($link, $_REQUEST['feecat']);	
				$sec = mysqli_real_escape_string($link, $_REQUEST['sec']);
				$roll=mysqli_real_escape_string($link, $_REQUEST['roll']);
				$fee = mysqli_real_escape_string($link, $_REQUEST['fee']);
				$con = mysqli_real_escape_string($link, $_REQUEST['con']);
				$due = mysqli_real_escape_string($link, $_REQUEST['due']);
				//$medium = mysqli_real_escape_string($link, $_REQUEST['mediu']);

                $query = "UPDATE juniorclg SET feecat='$feecat',fee='$fee',con='$con',due='$due',sec='$sec' WHERE roll = '$roll' ";
	
				
               

                if (mysqli_query($link, $query))
                {
                   echo "<p>Record Updated<p>";
                }   
                else
                {
                   echo "Problem updating record. MySQL Error: " . mysqli_error($link);
                }
            }

            mysqli_close($link);
        ?>