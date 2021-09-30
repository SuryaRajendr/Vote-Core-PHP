<?php
$db_hostname = 'localhost';
$db_username = 'root';
$db_password = '';
$db_name = 'test2';

$con = mysqli_connect ($db_hostname,$db_username,$db_password,$db_name);
if (mysqli_connect_errno()) 
{
echo "Could not establish database connection!";
exit();
}

?>