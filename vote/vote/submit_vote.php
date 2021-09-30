<?php

require('database.php');
session_start();
$name=$_POST['voter_name'];
$email = $_SESSION['email'];
$vote=$_POST['voted_for'];


    $query="INSERT INTO admin(voter_name,mail_id,voted_for) VALUES('$name','$email','$vote')";
     if(mysqli_query($con,$query))
                {
                  header('Location:end.php');
                }
                else { echo "error".mysqli_error($con); }

?>
