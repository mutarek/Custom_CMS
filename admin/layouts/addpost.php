<?php
session_start();
if(!isset($_SESSION ['username']))
{
    header("Location: http://localhost/cms/admin/");
}
else
{
?>


<?php
include "../header.php";
?>
    <form action="../actions/postdata.php" method="post" enctype="multipart/form-data">
        <label for="">Enter Blog Title</label>
        <input name="title" type="text" placeholder="Enter Title">
        <br>
        <br>
        <label for="">Enter Blog Desc</label>
        <input name="desc" type="text" placeholder="Enter Desc">
        <br>
        <br>
        <div>
        <label for="">Enter Blog Image</label>
        <input name="filetoUpload" type="file" required>
        </div>
        <br>
        <br>
        <input type="submit" value="Submit">
    </form>
<?php
include "../footer.php";
?>

<?php
}
?>