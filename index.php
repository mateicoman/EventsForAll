<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="EventsForAll Homepage" content="">
    <meta name="Group X1" content="">

    <title>EventsForAll HomePage</title>

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

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 30%;
      margin: auto;
  }
  </style>
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
  	    <li role="presentation" class="active"><a href="#">Home</a></li>
  	    <li role="presentation"><a href="About.html">About</a></li>
            <li role="presentation"><a href="updateevent.html">Add Event</a></li>
            <li role="presentation"><a href="login.html">Login</a></li>
            <li role="presentation"><a href="logout.php">Logout</a></li>
            <li role="presentation"><a href="member.html">Register</a></li>
            <li role="presentation"><a href="MyEventsDisplay.php">MyEvent</a></li>
            <li role="presentation"><a href="board_write.php">Reply</a><li>
          </ul>
        </div><!--/.navbar-collapse -->
        <form action="search.php" method="get">
          <input type="text" name="q" /> <input type="submit" value="search" />
        </form>
      </div>
    </nav>

    <!-- Main jumbotron -->
    <div class="jumbotron">
      <div class="container">
        <h1>Fantastic events across Greater Manchester!</h1>
        <p>Your reliable, up to date and local source for disability and family friendly  events across the region.</p>
      </div>
    </div>

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
  </ol>


  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="kids-indoor.jpg" alt="Popular event">
      <div class="carousel-caption">
        <h2>Indoor Events</h2>
        <p></p>
      </div>
    </div>

    <div class="item">
      <img src="kids-outdoor.jpg" alt="Popular event">
      <div class="carousel-caption">
        <h2>Outdoor Events</h2>
        <p></p>
      </div>
    </div>

    <div class="item">
      <img src="home-tn-3.jpg"alt="Popular event">
      <div class="carousel-caption">
        <h2>For Charity</h2>
        <p></p>
      </div>
    </div>

    <div class="item">
      <img src="home-tn-1.jpg" alt="Popular event">
      <div class="carousel-caption">
        <h2>Evening Events</h2>
        <p></p>
      </div>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div class="popular-events"
  <p>Popular Events</p>
</div>

<div class="container">
      <div class="row">
        <div class="col-md-4">
            <img src="home-tn-1.jpg" width="300" height="150" style="float:center" hspace="0" vspace="30">
          <h2>Heading</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-md-4">
            <img src="home-tn-3.jpg" width="300" height="150" style="float:center" hspace="0" vspace="30">
          <h2>Heading</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
       </div>
        <div class="col-md-4">
          <img src="home-tn-4.jpg" width="300" height="150" style="float:center" hspace="0" vspace="30">
          <h2>Heading</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div>
      </div>
      <div class="footer"
        <footer>
          <p>&copy; Man CS Group X1 2016.</p>
        </footer>
      </div>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"><\/script>')</script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="https://getbootstrap.com/assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
