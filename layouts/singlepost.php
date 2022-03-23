<?php
require "../admin/database/dbcon.php";
$post_id = $_GET['p_id'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $query = "SELECT * FROM blog WHERE post_id = $post_id";
    $db = new newdatabase();
    $result = $db->fetch_query($query);
    $output = mysqli_fetch_assoc($result);
    ?>
    <article>
    <h1><?php echo $output['post_title']; ?></h1>
        <img src='uploads/.<?php echo $output['post_image']; ?>'>
        <p><?php echo $output['post_content'] ?></p>
    </article>
</body>
</html>