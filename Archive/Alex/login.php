<html>
<body>

<?php
$database_host = "dbhost.cs.man.ac.uk";
$database_user = "mbyx4ar3";
$database_pass = "baconstrips";
$group_dbnames = array(
    "2015_comp10120_x1",
);

//Code copied from:
//http://www.w3schools.com/php/php_mysql_select.asp

//Create connection
$conn = new mysqli($database_host, $database_user,
                    $database_pass, $database_dbnames);
//Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//prepare to hash the users input
$pass_to_hash = $_POST["password"];
$username = $_POST["username"];

//hash the password supplied, sha256 can be swapped for another algo
$hashpassword = hash('sha256', '$pass_to_hash');

//sql query to check username and password match
$sql = "SELECT * FROM $Users WHERE Username='$username'
                                      and Password='$hashpassword'";

$result = $conn->query($sql);

//if result is found in the table, login details are correct
if ($result->num_rows = 1) {
    while($row = $result->fetch_assoc()) {
        echo "Welcome " . $row["username"].
                        " you have successfully logged in"."<br>";
    }
}
$conn->close();
?>
</body>
</html>
