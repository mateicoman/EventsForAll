<?
// 1. public Comment
include ("./Comment.php");

// 2. For login who does not do it.
if(!$_SESSION[user_id]){
    ?>
    <script>
        alert("Login Please for commenting.");
        location.replace("login.php");
    </script>
    <?
}
// 3. Making Frame by using HTML
?>
<br/>
<table style="width:1000px;height:50px;border:5px #CCCCCC solid;">
    <tr>
        <td align="center" valign="middle" style="font-zise:15px;font-weight:bold;">Commenting</td>
    </tr>
</table>
<br/>
<form name="bWriteForm" method="post" action="./board_write_save.php" style="margin:0px;">
<table style="width:1000px;height:50px;border:0px;">
    <tr>
        <td align="center" valign="middle" style="width:200px;height:50px;background-color:#CCCCCC;">Title</td>
        <td align="left" valign="middle" style="width:800px;height:50px;"><input type="text" name="b_title" style="width:780px;"></td>
    </tr>
    <tr>
        <td align="center" valign="middle" style="width:200px;height:200px;background-color:#CCCCCC;">Contents</td>
        <td align="left" valign="middle" style="width:800px;height:200px;">
        <textarea name="b_contents" style="width:800px;height:200px;"></textarea>
        </td>
    </tr>
    <!-- 4. write_save -->
    <tr>
        <td align="center" valign="middle" colspan="2"><input type="button" value=" 글쓰기 " onClick="write_save();"></td>
    </tr>
</table>
</form>
<script>
// 5.checking function
function write_save()
{
    // 6. save f to form f
    var f = document.bWriteForm;

    // 7.Check the value of title

    if(f.b_title.value == ""){
        alert("Title: ");
        return false;
    }

    if(f.b_contents.value == ""){
        alert("Contents");
        return false;
    }

    f.submit();

}
</script>
