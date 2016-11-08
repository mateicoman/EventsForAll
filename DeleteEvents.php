<?php

  include('MyEvents.php');
  
  if(isset($_GET['User_ID']) && is_numeric($_GET['User_ID']))
  {
  $User_ID = $_GET['User_ID'];
  
  $result = mysql_query("DELET FROM myevents WHERE User_ID=$User_ID")
  or die(mysql_error());
  
  header("Location: MyEventsDisplay.php");
  }
  else
  
  {
  header("LOCATION: MyEventsDisplay.php");
  }
  
?>
