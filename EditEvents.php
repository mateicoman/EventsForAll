<?php
  function renderForm($User_ID, $Events, $error)
  {
  ?>
  
  <html>
  <head>
  <title>Edit Record</title>
  </head>
  <body>
  <?php
  //if there are any errors, display the error
  if ($error != '')
  {
    echo '<div style="padding:4px; border:1px solid red; color:red;">'.$error.'</div>';
  }
  ?>
  
  <form action="" method="post">
  <input type="hidden" name="User_ID" value="<?php echo $User_ID; ?>"
  <div>
  <p><strong>User_ID:</strong> <?php echo $User_ID; ?></p>
  <strong>Events: "</strong> <?php echo $User_ID; ?></p>
  <p>* Required</p>
  <input type="submit" name="submit" value="Submit">
  </div>
  </form>
  </body>
  </html>
  <?php
  {
  include('MyEvents.php');
  
  if (isset($_POST['submit']))
  {
  
  if(is_numeric($_POST['User_ID']))
  {
    $User_ID = $_POST['User_ID'];
    $Events = mysql_real_escape_string(htmlspecialchars($_POST['Events']));
    
  if ($Events == '')
  {
    $error = 'ERROR: please fill in all required fields!';
    
    
  renderForm($User_ID, $Events, $error);
  }
  else
  
  mysql_query("UPDATE MyEvents SET Events='$Events', WHERE User_ID='$User_ID'")
  or die(mysql_error());
  
  header("Location: MyEventsDisplay.php");
  }
  }
  else
  {
  echo 'Error exist!!!';
  }
  }
  else
  {
  
  if (isset($_GET['id']) && is_numeric($_GET['id']) && $_GET['id'] > 0)
  {
  $id = $_GET['id'];
  $result = mysql_query("SELECT * FROM MyEvents WHERE id=$id")
  or die(mysql_error());
  $row = mysql_fetch_array($result);
  
  //check the user ID matches up to database
  if($row)
  {
  
  $Events = $row['Events'];
  
  rednerFrom($User_ID, $Events, '');
  }
  else
  {
  echo "No Events!";
  }
  }
  else
  //if the userID in the URL isnt valid, display an error
  {
  echo 'No User ID exist!';
  }
  }
  ?>  
  
