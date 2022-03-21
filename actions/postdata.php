<?php
require "../database/db.php";
if(isset($_FILES['filetoUpload'])){
    $error = array();
    $file_name = $_FILES['filetoUpload']['name'];
    $file_size = $_FILES['filetoUpload']['size'];
    $file_tmp = $_FILES['filetoUpload']['tmp_name'];

    if($file_size > 2097152){
        $error[]="Only 2 mb file";
    }
    if(empty($error)==true){
        move_uploaded_file($file_tmp,"../uploads/.$file_name");
    }
    else{
        print_r($error);
        die();
    }
}

$title = $_POST['title'];
$desc = $_POST['desc'];
$date = date("d M, Y");
$query = "INSERT INTO post (post_title,post_image,post_content) VALUES ('$title','$file_name','$desc')";
$db = new database();
$res = $db->insert_data($query);

if($res == true){
    echo "Success";
    header("Location: http://localhost/cms/index.php");
}
else{
    echo "error";
}

?>