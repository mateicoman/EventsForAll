<!-- All this content was creatingt using data from tutorials
which I've modified-->
<!DOCTYPE html>
<html>
<body style ="background color: #ccffcc">
<body>
<?php
$servername = "dbhost.cs.man.ac.uk";
$username = "mbax4vo3";
$password = "kilburn1";
$dbname = "2015_comp10120_x1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$creatorUsername = $eventName = $eventType = $adress = $postcode = "";

if($_SERVER["REQUEST_METHOD"] == "POST")
{
  $creatorUsername = test_input($_POST["creatorUsername"]);
  $eventName = test_input($_POST["eventName"]);
  $eventType = test_input($_POST["eventType"]);
  $address = test_input($_POST["address"]);
  $postcode = test_input($_POST["postcode"]);
  $date = test_input($_POST["date"]);
  $time = test_input($_POST["time"]);
  $contactname = test_input($_POST["contactname"]);
  $contacttel = test_input($_POST["contacttelephone"]);
  $eventdesc = test_input($_POST["eventdescription"]);

}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
$k=0;
$ordID = '';
$sql = "";
$query = "SELECT `Organisation ID` FROM `Organisations` WHERE `Username` = '$creatorUsername'";
$aux = $conn->query($query);
$resultarr = mysqli_fetch_assoc($aux);
$orgID = $resultarr["Organisation ID"];


$now = date_default_timezone_set('Europe/London');
if(preg_match('/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/', $date) === FALSE)
{echo "This is not a valid date!";
    $k++;
}
else if(preg_match('/^(0?\d|1[0-2]):[0-5]\d\s(am|pm)$/i', $time) === FALSE)
{echo "This is not a valid time!";
 $k++;}
else
{
$sql = "INSERT INTO `Events` (`Creator_ID`, `Event_Name`, `Event_Type`, `Address`, `Postcode`, `Date`, `Time`, `Contact_Name`,`Contact_Telephone`, `Event_Desc`) VALUES ('$orgID','$eventName','$eventType','$address','$postcode',
                                                                                                                                                                '$date', '$time', '$contactname', '$contacttel', '$eventdesc')";
$k = 0;
}
if ($conn->query($sql) === TRUE)
    echo "New record created successfully";
    header("Refresh:  3;url=https://web.cs.manchester.ac.uk/mbax4nm5/GroupProject/index.php");
else
    {echo "Something went wrong :(";
     echo "Error creating database: " . $conn->error;
     echo "<a href='https://web.cs.manchester.ac.uk/mbax4vo3/GroupProject/updateevent.html'> Try again </a>";}



$conn->close();
?>
</body>
</html>
