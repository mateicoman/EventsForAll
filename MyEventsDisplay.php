<html>
<head>
  <title>View Records</title>
  </head>
  <body>
  
  <?php
  //connect to database
  include('MyEvents.php');
  
  //get results from database
  $result = mysqli_query($connect, "SELECT * FROM MyEvents")
  or die(mysql_error());
  
  //display data in table
  echo"<p><b>View All</b> | <a href='ViewingEvents.php?page-1'>View paginated</a></p>";
  
  echo"<table border = '1' cellpadding='10'>";
  echo"<tr> <th>User_ID</th> <th>Events</th> <th></th> <th></th> </tr>";
  
  //loop through results of database query, displaying them in the table
  //while($row = mysql_fetch_array($result)){
  
      //echo out the contents fo each row into a table
      echo "<tr>";
      echo '<td>' .$row["User_ID"].'</td>';
      echo '<td>' .$row["User_ID"].'</td>';
      echo '<td><a href="EditEvents.php?User_ID='.$row["User_ID"].'">Edit</a></td>';
      echo '<td><a href="DeleteEvents.php?User_ID='.$row["User_ID"].'">Delete</a></td>';
      echo "</tr>";
      
    //}
    
    //close table
    echo"</table>";
    ?>
    <p><a href="MyEventsDatabase.php">Add a new record</a></p>
    
    </body>
    </html>
