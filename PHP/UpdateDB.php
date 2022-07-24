<?php
    require('ConnectDB.php');
    if(isset($_POST['Update'])){
        $id=mysqli_escape_string($conn,$_POST['id']);
        $reName=mysqli_escape_string($conn,$_POST['reName']);
        $reImage_name=mysqli_escape_string($conn,$_FILES["img"]["name"]);
        $reSource=mysqli_escape_string($conn,'../image/');
        $reImage_URL=mysqli_escape_string($conn,$reSource.$reImage_name);
        if(isset($id)&&isset($reName)&& isset($reImage_name)){
            move_uploaded_file($_FILES['img']['tmp_name'],$reImage_URL);
            $upload=mysqli_query($conn,"UPDATE `product` SET `name` = '$reName', `image` = '$reImage_name' WHERE `product`.`id` = '$id'");
            echo "<script type='text/javascript'>alert('Cập nhật thành công');
            document.location='/Website/Html/admin.php'</script>";
        }
    }
?>