<?php
session_start();
if(!(isset($_SESSION['email'])))
{
  header('location: index.php');
}
require('database.php');
$email = $_SESSION['email'];
$EnquiryQuery = "SELECT name FROM voting WHERE mail_id='$email'";
$EnquiryResult = mysqli_query($con,$EnquiryQuery) or die(mysqli_error($con));
$result = mysqli_fetch_array($EnquiryResult);
?>
<html>
<head>
  <link rel="stylesheet" href="assets/css/bootstrap.min.css"/>
  <script src="assets/js/bootstrap.min.js"></script>
  <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <style>
  body{margin:40px;}

  .btn-circle.btn-xl {
    width: 100px;
    height: 100px;
    padding: 10px 16px;
    font-size: 25px;
    line-height: 1.33;
    border-radius: 50px;
  }
.mytext
{
  font-size: 25px;
  line-height: 1.33;
  border-radius: 50px;
  background-color: orange;
  padding: 30px;
  text-align: center;
  text-decoration-color:while;

}
input[type=text] {
  width: 15%;
  padding: 9px 16px;
  margin: 8px 0;
  box-sizing: border-box;
  border: none;
  background-color: #3CBC8D;
  color: white;
}
  </style>

</head>
<body>

<center><div class="mytext">welcome<input type= "text" value="<?php echo $result['name']; ?>" id="fname" /></div><br><br><br>
ENTER YOUR VOTE HERE <br>
<form action="submit_vote.php" method="post">
<input type  = "hidden" name="voted_for" value="NTK"/>
<input type  = "hidden" name="voter_name" value="<?php echo $result['name']; ?>"/>
<button type="submit" class="btn btn-danger btn-circle btn-xl" Value = "NTK">NTK</button>
</form>
<form action="submit_vote.php" method="post">
<input type  = "hidden" name="voted_for" value="MNM"/>
<input type  = "hidden" name="voter_name" value="<?php echo $result['name']; ?>"/>
<button type="submit" class="btn btn-default btn-circle btn-xl" Value = "MNM">MNM</button>
</form>
<form action="submit_vote.php" method="post">
<input type  = "hidden" name="voted_for" value="DMK"/>
<input type  = "hidden" name="voter_name" value="<?php echo $result['name']; ?>"/>
<button type="submit" class="btn btn-primary btn-circle btn-xl" Value = "DMK">DMK</button>
</form>
<form action="submit_vote.php" method="post">
<input type  = "hidden" name="voted_for" value="ADMK"/>
<input type  = "hidden" name="voter_name" value="<?php echo $result['name']; ?>"/>
<button type="submit" class="btn btn-success btn-circle btn-xl" Value = "ADMK">ADMK</button>
</form>
</center>
</body>
</html>
