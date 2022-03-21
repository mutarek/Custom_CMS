<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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
</body>
</html>