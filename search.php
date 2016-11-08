<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Search Page</title>

      <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">

    <!-- EventsForAll CSS -->
    <link href="EventsForAll.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="https://getbootstrap.com/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><strong><font size="12">Events</strong>ForAll</font></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav nav-pills navbar-right">
        <li role="presentation" ><a href="index.php">Home</a></li>
        <li role="presentation"><a href="About.html">About</a></li>
            <li role="presentation"><a href="updateevent.html">Add Event</a></li>
            <li role="presentation"><a href="login.html">Login</a></li>
            <li role="presentation"><a href="logout.php">Logout</a></li>
            <li role="presentation"><a href="member.html">Register</a></li>
          </ul>
        </div><!--/.navbar-collapse -->
        <form action="search.php" method="get">
          <input type="text" name="q" /> <input type="submit" value="search" />
        </form>
      </div>
    </nav>

    <?php
    $database_host = "dbhost.cs.man.ac.uk";
    $database_user = "mbyx4ar3";
    $database_pass = "baconstrips";
    $group_dbnames = "2015_comp10120_x1";

    //Code copied from:
    //http://www.w3schools.com/php/php_mysql_select.asp

    //Create connection
    $conn = new mysqli($database_host, $database_user,
                        $database_pass, $group_dbnames);
    //Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

      $searchTerms = $_GET["q"];
      $query ="SELECT * FROM Events WHERE Event_Name LIKE \"%$searchTerms%\" ORDER BY (".strlen($searchTerms)." - CHAR_LENGTH(Event_Name)) DESC";
      $query = "SELECT * FROM Events WHERE Event_Name LIKE \"%$searchTerms%\"";
      $result = $conn->query($query);
      $searchCount = 0;

      ?>
      <div class="container">
          <hgroup class="mb20">
          <h1>Search Results</h1>
        </hgroup>
          <section class="col-xs-12 col-sm-6 col-md-12">
          </section>
      </div>
<?php
      if ($result->num_rows > 0) {

        while($row = $result->fetch_assoc()) {
          ?>
           <article class="search-result row" id="searchBox">
           <div class="col-xs-12 col-sm-12 col-md-3" >
             <a href="#" title="" class="thumbnail"><img src="<?php echo $row["Image_Url"]?>" alt="" /></a>
           </div>
           <div class="col-s-12 col-sm-12 col-md-2">
             <ul class="meta-search">
               <li><i class="glyphicon glyphicon-calendar"></i> <span><?php echo $row["Date"]?></span></li>
               <li><i class="glyphicon glyphicon-time"></i> <span><?php echo $row["Time"]?></span></li>
               <li><i class="glyphicon glyphicon-tags"></i> <span><?php echo $row["Event_Type"]?></span></li>
             </ul>
           </div>
           <div class="col-xs-12 col-sm-12 col-md-7 excerpet">
             <h3><a href="#" title=""><?php echo $row["Event_Name"]?></a></h3>
             <ul class="meta-search" style="list-style-type:none">
               <li><i class="glyphicon glyphicon-home" style="padding-left:0"></i> <span><?php echo $row["Address"]?></span></li>
               <li><i class="glyphicon glyphicon-home" style="padding-left:0"></i> <span><?php echo $row["Postcode"]?></span></li>
               <li><i class="glyphicon glyphicon-user" style="padding-left:0"></i> <span><?php echo $row["Contact_Name"]?></span></li>
               <li><i class="glyphicon glyphicon-phone" style="padding-left:0"></i> <span><?php echo $row["Contact_Telephone"]?></span></li>
             </ul>
             <p><?php echo $row["Event_Desc"]?></p>
                     <!--<span class="plus"><a href="#" title=""><i class="glyphicon glyphicon-plus"></i></a></span>-->
           </div>
           <span class="clearfix borda"></span>
         </article>
         <?php
       }
        //THIS LOOPS THE EVENT, CAN ECHO DESCRIPTION, LOCATION ETC AND PUT EACH IN A SEPARATE BUTTON USING THE WHILE LOOP
        }

      else {
        ?>
        <div class="container">
            <hgroup class="mb20">
            <h4>No events found</h4>
          </hgroup>
            <section class="col-xs-12 col-sm-6 col-md-12">
            </section>
            <?php
      }
      ?>


<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="https://getbootstrap.com/assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
