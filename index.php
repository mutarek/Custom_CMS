<?php
include "header.php";
require "admin/database/dbcon.php";
?>
    <?php
    $query = "SELECT * FROM post";
    $db = new newdatabase();
    $result = $db->fetch_query($query);
    if(mysqli_num_rows($result)){
        while ($row = mysqli_fetch_assoc($result)) {
    ?>
    <div class="content">
    <div class="each-product">
        <h1><?php echo $row['post_title']; ?></h1>
        <img src='admin/uploads/.<?php echo $row['post_image']; ?>'>
        <p><?php echo $row['post_content'] ?></p>
        <a href="layouts/singlepost.php?p_id=<?php echo $row['post_id'];?>">
        <button>
            Read More
        </button>
        </a>
    </div>
    </div>
    <?php }  } ?>

<?php
include "footer.php";
?>