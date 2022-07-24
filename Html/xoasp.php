<?php 
    require('../PHP/ConnectDB.php');
    $id = (int) $_GET['id'];
    $image = "SELECT imgURL  FROM `vechieufilm` WHERE `vechieufilm`.`id` = $id";
    // DELETE file img
    if (file_exists("./images/".$after['imgURL'])) {
        unlink("./images/".$after['imgURL']);
    }
    $sql = "DELETE FROM `vechieufilm` WHERE `vechieufilm`.`id` = $id";
    mysqli_query($conn,$sql);
    header("location:trangchu.php");
?>