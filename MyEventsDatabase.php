<?php

function renderForm($Events, $error)
{
    ?>
    
    <html>
    <head>
    <title> New Record </title>
    </head>
    <?php
    //if there are any errrors, display them
    if ($error != '')
    {
      echo '<div style="padding:4px; border:1px; solid red; color:red;">'.$error.'</div>';
    }
    ?>
    
    <form action = ""methd="post">
    
    <div>
    <strong>Events: *</string> <input type="text" name="item" value="<?php echo $Events; ?>" /><br/>
    <p>* required</p>
    <input type="submit" name="submit" value="Submit">
    </div>
    </form>
    </html>
    <?php
}

//connect to the database 
include ('MyEvents.php');

//check if the form has been submitted
if (isset($_POST['submit']))
{
  $Events = mysql_real_escape_string (htmlspecialchars ($_POST['Event']));
  
  //check if both fields are entered
  if ($item == '')
  {
    //generate error message
    $error = 'ERROR: please fill in all required fields!' ;
    
    //if event is blank, try it again
    renderForm ($Events, $error);
  }
  else
  {
    //save the data to database
    mysql_query ("Insert Eventlist Set Events='$Events'")
    or die(mysql_error ());
    
    //once saved, redirect back to the view page
    header("Location: MyEventsDisplay.php");
    
  }
}
else
//if the form hasnt been submitted, display the form
{
  renderForm ('','','');
}
?>




    
    
    
    
