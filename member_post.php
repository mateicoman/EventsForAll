<?php

$User_ID = $_POST['User_ID'];
$Username = $_POST['Username'];
$Password = $_POST['Password'];
$Firstname = $_POST['Firstname'];
$Surname = $_POST['Surname'];
$Address = $_POST['Address'];
$Postcode = $_POST['Postcode'];
$E_mail = $_POST['E_mail'];


 
 $connect = mysqli_connect("dbhost.cs.man.ac.uk","mbax4jk4","woals1187","2015_comp10120_x1");

 if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
 
 $query = "INSERT INTO 'Users'('User_ID`,`Username`,`Password`,`Firstname`,`Surname`,`Address`,`Postcode`,`E_mail`)
  values('$User_ID','$Username','$Password','$Firstname','$Surname','$Address','$Postcode','$E_mail')";
 mysqli_query($connect, $query);
 mysqli_close($connect);

 echo "complete to register. Thank you!";


?>

<script>
</script>


