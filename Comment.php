<?
// 1. to clearing the session.
session_start();

// 2. include user function
include ("./Registo");

// 3. Connecting DB
$connect = sql_connect($db_host, $db_user, $db_pass, $db_name);

// 4. part of head 
?>
<table style="width:1000px;height:50px;border:5px #CCCCCC solid;">
    <tr>
        <td align="center" valign="middle" colspan="3" style="font-zise:15px;font-weight:bold;">
        PHPer's Heaven sample Comments
        </td>
    </tr>
    <tr>
        <td align="center" valign="middle" style="font-size:12px;"><a href="./board_list.php">Contents</a></td>
        <td align="center" valign="middle" style="font-size:12px;">
        <?
        // 5. Linking the login whether or not by using session
        if($_SESSION[user_id]){
        ?>
        <a href="./board_logout.php">Logout</a>
        <?}else{?>
        <a href="./board_login.php">Login</a>
        <?}?>
        </td>
        <td align="center" valign="middle" style="font-size:12px;">
        <?
        // 6. linking the login by using session
        if($_SESSION[user_id]){
        ?>
        <a href="./board_write.php">FixingDetails</a>
        <?}else{?>
        <a href="./board_register.php">Register</a>
        <?}?>
        </td>
    </tr>
</table>
