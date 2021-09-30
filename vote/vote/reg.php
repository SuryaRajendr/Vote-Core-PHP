
<?php
session_start();
require('database.php');

$mailid=$_POST['mailid'];
$name = $_POST['name'];
$password = $_POST['password'];
$password = md5($password);

$EnquiryQuery = "SELECT * FROM voting WHERE mail_id = '$mailid'";
$EnquiryResult = mysqli_query($con,$EnquiryQuery) or die(mysqli_error($con));
$result = mysqli_fetch_array($EnquiryResult);

 if($result['mail_id'] == $mailid)
 {
   echo "This mail Id isalready used ..! not permission to vote again";
 }
else{
  $query="INSERT INTO voting(mail_id,name,password) VALUES('$mailid','$name','$password')";
 if(mysqli_query($con,$query))
            {
              $_SESSION['email'] = $mailid;
               header('Location:voting_page.php');

            }
        else
         {
                echo "error".mysqli_error($con);
           }
}


?>
