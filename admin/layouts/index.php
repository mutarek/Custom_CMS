<?php
session_start();
if($_SESSION['username']==NULL){
    header("Location: http://localhost/cms/admin/");
}else{
    include "../header.php";
    include "../footer.php";
}
?>