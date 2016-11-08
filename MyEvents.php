<?php

//database variable
$server = "dbhost.cs.man.ac.uk";
$user = "mbax4jk4";
$pass = "woals1187";
$db = "2015_comp10120_x1";

//connect to database
$connect = mysqli_connect("$server","$user","$pass","$db")
//It is for non-connection
or die ("Could not connect to server ... \n" .mysql_error());
mysqli_select_db($connect, `MyEvents`);


?>
