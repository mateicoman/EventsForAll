<html>
<header>
<link rel="stylesheet" type="text/css" href="style.css">
</header>
<body>

<?php
//Variables
$yourname = check_input($_POST["name"], "Enter your name!");
$email = check_input($_POST["email"], "Enter your email!");
$email = htmlspecialchars($_POST['email']);

//Validate email input seperately.
if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email))
{
  die("E-mail address not valid");
}

//Check if a name entered is a member of X1, output different message.
if (($yourname == "Neil Malley") || ($yourname == "Alex Robinson")
   || ($yourname == "Jaemin Kim") || ($yourname == "Valentin Omerta") 
   || ($yourname == "Matei Conman") || ($yourname == "Andy Smith")){
  echo "A special welcome to ";
  echo $yourname;
  echo " who is a member of the X1 tutorial group!!<br />";
  echo " Your email address is ";
  echo $email;
  echo ".";
} else {
  echo "Hello ";
  echo $yourname;
}

//Validate the input using a function called check_input.
function check_input($data, $problem = "")//W3S PHP tutorial.
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  if ($problem && strlen($data) == 0) //myphpforms.com
    {
        die($problem);
    }
  return $data;
}
?>
</body>
</html>
