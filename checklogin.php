<?php
//session_start();

$database_host = "dbhost.cs.man.ac.uk";
$database_user = "mbyx4ar3";
$database_pass = "baconstrips";
$group_dbnames = "2015_comp10120_x1";

//select the table to be used
$tbl_name="Users";

//initialise db connection
$con = mysqli_connect("$database_host", "$database_user",
"$database_pass", "$group_dbnames");

//report any connection errors
if (mysqli_connect_errno())
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

//store the data from form
if (isset($_POST['username']))
{
  $username = $_POST['username'];
}

if (isset($_POST['password']))
{
  $password = $_POST['password'];
}

//check user data with db data
$sql="SELECT * FROM $tbl_name WHERE username='$username'
and password='$password'";
$result=mysqli_query($con, $sql);

//count # of results from query
$rowcount=mysqli_num_rows($result);

//if 1 match is found, user logged in successfully
if($rowcount==1)
{
  //$_SESSION['current_user']=$username;
  //$_SESSION['logged_in']= true;
  header("Refresh:  3;url=https://web.cs.manchester.ac.uk/mbax4nm5/GroupProject/index.php");
      echo "Welcome, Log in successful, returning to homepage";
}
else
{
  header("Refresh:  3;url=https://web.cs.manchester.ac.uk/mbax4nm5/GroupProject/login.html");
  echo "Username or Password incorrect";
}
?>
