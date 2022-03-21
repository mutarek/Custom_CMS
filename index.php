<?php
require "database/db.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .blog{
            height:auto;
            width: 300px;
            padding: 10px;
            box-shadow:2px 2px 5px 0px grey;
        }
        .blog img{
            height:200px;
            width: 300px;
            border-radius: 15px;
        }
    </style>
</head>
<body>
    <?php
    $query = "SELECT * FROM post";
    $db = new database();
    $db->fetch_data($query);
    $result = $db->sql;
    if(mysqli_num_rows($result)){
        while ($row = mysqli_fetch_assoc($result)) {
    ?>
    <article class="blog">
        <h1><?php echo $row['post_title']; ?></h1>
        <img src='uploads/.<?php echo $row['post_image']; ?>'>
        <!-- echo "<img src='images/".$row['imagename']."' >";  -->
    </article>
    <?php }  } ?>
</body>
</html>