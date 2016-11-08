<html>
<head>
        <title>View Records</title>
</head>
<body>

<?php
          //Connect to the database
          include('MyEvents.php');
          
          //number of results to show per page
          $per_page = 3;
          
          //figure out the total pages in the database
          $result = mysqli_query("SELECT * FROM MyEvents");
          $total_results = mysqli_num_rows($result);
          $total_pages = ceil($total_results / $per_page);
          
          //check if the 'page' variable is set in the URL 
          if (isset($_GET['page']) && is_numeric($_GET['page']))
          {
            $show_page = $_GET['page'];
            
            //make sure the $show_page value is valid
            if ($show_page > 0 && $show_page <= $total_pages)
            {
              $start = ($show_page - 1) * $per_page;
              $end = $start + $per_page;
            }
            else
            {
              //error - show first set of results
              $start = 0;
              $end = $per_page;
            }
          }
          else
          {
            $start = 0;
            $end = $per_page;
          }
          echo "<p><a href='ViewingEvents.php?page=$i'>$i</a> ";
          for ($i = 1; $i <= $total_pages; $i++)
          {
            echo "<a href='ViewingEvents.php?page=$i'>$i</a> ";
          }
          echo "</p>";
          
          //display pagination
          echo"<table border='1' cellpadding='10'>";
          echo"<tr> <th>User_ID</th> <th>Events</th> <th></th> <th></th></tr>";
          
          for ($i == $start; $i < $end; $i++)
          {
            if ($i == $total_results) { break; }
            
            echo "<tr>";
            echo '<td>' . mysqli_result($result, $i, 'User_ID') . '</td>';
            echo '<td>' . mysqli_result($result, $i, 'Events') . '</td>';
            echo '<td><a href="EditEvents.php?User_ID=' . mysqli_result($result, $i, 'User_ID') . '">Edit</a></td>';
            echo '<td><a href="DeleteEvents.php?User_ID=' . mysqli_result($result, $i, 'User_ID') . '">Delete</a></td>';
            echo "</tr>";
          }
          //close the table
          echo "</table>";
          
          //pagination
?>
<p><a href="MyEventsDatabase.php">Add a new record</a></p>

</body>
</html>
            
            
            
            
